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
      'company_name',
      'company_address',
      'telephone_number',
      'cert',
  ];
}
