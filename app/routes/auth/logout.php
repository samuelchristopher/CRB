<?php

$app->get('/logout', $authenticated(), function() use ($app) {

  unset($_SESSION[$app->config->get('auth.session')]);

  if  ($app->getCookie($app->config->get('auth.remember'))) {
    $app->auth->removeRememberCredentials();

    $app->deleteCookie($app->config->get('auth.remember'));
  }

  $app->flash('success', 'You have been logged out');
  return $app->response->redirect($app->urlFor('login'));

})->name('logout');
