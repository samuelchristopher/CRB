<?php

return [
  'app' => [
      'name' => 'CRBS',
      'url' => 'http://crbsweb.com',
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
        'password' => 'e2Rpbhl4hC',
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
        'from' => 'CRBS <hello@crbs.com>',
        'email' => 'support@classicreliancebureau.com'
      ],
      'twig' => [
        'debug' => false
      ],
      'csrf' => [
        'key' => 'csrf_token'
      ]
];
