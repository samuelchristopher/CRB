<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;
use RandomLib\Factory as RandomLib;

use Mailgun\Mailgun;

use CRB\User\User;
use CRB\Cert\Cert;
use CRB\Mail\Mailer;
use CRB\Helpers\Hash;
use CRB\Validation\Validator;

use CRB\Middleware\BeforeMiddleware;
use CRB\Middleware\CsrfMiddleware;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
    'mode' => file_get_contents(INC_ROOT . '/mode.php'),
    'view' => new Twig(),
    'templates.path' => INC_ROOT . '/app/views'
]);

$app->add(new BeforeMiddleware);
$app->add(new CsrfMiddleware);

$app->configureMode($app->config('mode'), function() use ($app) {
  $mode = preg_replace('/\s+/', '', $app->mode);
  $app->config = Config::load(INC_ROOT . "/app/config/{$mode}.php");
});

require 'database.php';
require 'filters.php';
require 'routes.php';

$app->auth = false;

$app->container->set('user', function() {
  return new User;
});

$app->container->set('cert', function() {
  return new Cert;
});

$app->container->singleton('hash', function() use ($app){
  return new Hash($app->config);
});

$app->container->singleton('validation', function() use ($app) {
  return new Validator($app->user, $app->hash, $app->auth);
});

$app->container->singleton('mail', function() use ($app) {
  $mailer = new Mailgun($app->config->get('mail.secret'));

  return new Mailer($app->view, $app->config, $mailer);
});

$app->container->singleton('randomlib', function() {
  $factory = new RandomLib;
  return $factory->getMediumStrengthGenerator();
});

$view = $app->view();

$view->parserOptions = [
  'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
  new TwigExtension
];
