<?php

use Carbon\Carbon;

$app->get('/u/:username', function($username) use ($app) {
  $user = $app->user->where('username', $username)->first();
  $now = Carbon::now()->timestamp;
  if(!$user) {
    $app->notFound();
  }

  if (!$app->auth) {
    $cs = [];
  } elseif ($app->auth->isAdmin()) {
    $cs = $user->certs()->get();
    $commentedAt = Carbon::create($user->commented_at)->toFormattedDateString();
  } else {
    $cs = $app->auth->certs()->get();
    $commentedAt = Carbon::create($app->auth->commented_at)->toFormattedDateString();
  }



  $app->render('user/profile.php', [
    'user' => $user,
    'cs' => $cs,
    'now' => $now,
    'commentedAt' => $commentedAt,
  ]);
})->name('user.profile');
