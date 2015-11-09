<?php

namespace CRB\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class C extends Eloquent
{
  protected $table = 'certificates';

  protected $fillable = [
    'certificate_name',
    'certificate_url',
  ];
}
