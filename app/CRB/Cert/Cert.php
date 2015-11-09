<?php

namespace CRB\Cert;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Cert extends Eloquent
{
  protected $table = 'certs';

  protected $fillable = [
      'user_id',
      'cert_url'
  ];
}
