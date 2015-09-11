<?php

return [
  'app' => [
      'name' => 'CRB',
      'url' => ':)',
      'hash' => [
        'algo' => PASSWORD_BCRYPT,
        'cost' => 10
      ]
    ],
      'db' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'name' => 'site',
        'username' => 'root',
        'password' => '',
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
