<?php

return [
  'app' => [
    'name' => 'CRBS',
    'url' => 'http://localhost',
    'hash' => [
      'algo' => PASSWORD_BCRYPT,
      'cost' => 10
    ],
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
    'secret' => 'key-0d5e1ea82f3ce1d6e01f33998bb15b31',
    'domain' => 'sandbox5074423a27aa40aeac8a3b5b34b58e27.mailgun.org',
    'from' => 'CRBS <support@crbsweb.com>',
    'email' => 'support@crbsweb.com'
  ],
  'twig' => [
    'debug' => true
  ],
  'csrf' => [
    'key' => 'csrf_token'
  ]
];
