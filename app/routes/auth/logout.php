<?php

$app->get('/logout', function() use ($app) {

  unset($_SESSION[$app->config->get('auth.session')]);

  $app->flash('success', 'You have been logged out');
  $app->response->redirect($app->urlFor('home'));

})->name('logout');
