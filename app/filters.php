<?php

$authenticationCheck = function($required) use ($app) {
  return function() use ($required, $app) {
    if ((!$app->auht && $required) || ($app->auth && !$required)) {
      $app->redirect($app->urlFor('home'));
    }
  };
};

$authenticated = function() use ($authenticationCheck) {
  return $authenticationCheck(true);
};

$guest = function() use ($authenticationCheck) {
  return $authenticationCheck(false);
};

$admin = function() use ($app) {
  return function() use ($app) {
    if(!$app->auth || !$app->auth->isAdmin()) {
      $app->redirect($app->urlFor('home'));
    }
  };
};
