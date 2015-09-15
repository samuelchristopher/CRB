<?php

namespace CRB\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  protected $table = 'users';

  protected $fillable = [
      'email',
      'username',
      'password',
      'active',
      'active_hash',
      'remember_identifier',
      'remember_token',
      'recover_hash',
      'company_name',
      'company_address',
      'telephone_number',
      'cert',
  ];

  public function  getFullName()
  {
    if (!$this->first_name || !$this->last_name) {
      return null;
    }

    return "{$this->first_name} {$this->last_name}" ;
  }

  public function getFullNameOrUsername()
  {
    return $this->getFullName() ?: $this->username;
  }

  public function activateAccount()
  {
    $this->update([
      'active' => true,
      'active_hash' => null,
    ]);
  }

  public function getAvatarUrl($options = [])
  {
    $size = isset($options['size']) ? $options['size']: 20;
    return 'http://www.gravatar.com/avatar/' . md5($this->email) . '?s=' . $size. '&d=identicon';
  }

  public function updateRememberCredentials($identifier, $token)
  {
    $this->update([
      'remember_identifier' => $identifier,
      'remember_token' => $token,
    ]);
  }

  public function removeRememberCredentials()
  {
    $this->updateRememberCredentials(null, null);
  }

  public function permissions()
  {
    return $this->hasOne('CRB\User\UserPermission', 'user_id');
  }

  public function hasPermission($permission)
  {
    return (bool) $this->permissions->{$permission};
  }

  public function isAdmin()
  {
    return (bool) $this->hasPermission('is_admin');
  }

  public function notCertified()
  {
    if (!$this->cert) {
      return true;
    } else {
      return false;
    }
  }

  public function certifyAccount($link)
  {
    $this->update([
      'cert' => $link
    ]);
  }
}
