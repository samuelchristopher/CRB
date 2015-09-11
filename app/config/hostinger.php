<?php

return [
  'app' => [
      'name' => 'CRB',
      'url' => 'http://crb.esy.es',
      'hash' => [
        'algo' => PASSWORD_BCRYPT,
        'cost' => 10
      ]
    ],
      'db' => [
        'driver' => 'mysql',
        'host' => 'mysql.hostinger.co.uk',
        'name' => 'u934164025_site',
        'username' => 'u934164025_root',
        'password' => 'password1234',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
      ],
      'auth' => [
        'session' => 'user_id',
        'remember' => 'user_r',
      ],
      'mail' => [
        'smtp_auth' => true,
        'smtp_secure' => 'tls',
        'host' => 'smtp.gmail.com',
        'username' => 'testemailofmine@gmail.com',
        'password' => 'testemailofmine123',
        'port' => '587',
        'html' => true
      ],
      'twig' => [
        'debug' => false
      ],
      'csrf' => [
        'key' => 'csrf_token'
      ]
];
