<?php

$app->get('/admin/users', $admin(), function() use ($app) {
  $users = $app->user->where('active', true)->get();

  $app->render('admin/user/all.php', [
    'users' => $users
  ]);
})->name('admin.user.all');
