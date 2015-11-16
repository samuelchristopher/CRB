<?php

$app->get('/u/:username', function($username) use ($app) {

  $user = $app->user->where('username', $username)->first();



  // $certificates = $app->cert->where('user_id', $user->id)->get();

  // var_dump($app->user->c);

  if(!$user) {
    $app->notFound();
  }

  if (!$app->auth) {
    $cs = [];
  } elseif ($app->auth->isAdmin()) {
    $cs = $user->certs()->get();
  }else {
    $cs = $app->auth->certs()->get();
  }


  $app->render('user/profile.php', [
    'user' => $user,
    'cs' => $cs
    // 'certificates' => $certificates
  ]);
})->name('user.profile');
