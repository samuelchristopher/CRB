<?php

$app->get('/change-password', $authenticated(), function() use ($app) {
  $app->render('auth/password/change.php');
})->name('password.change');


$app->post('/change-password', $authenticated(), function() use ($app) {

  $request = $app->request;

  $passwordOld = $request->post('password_old');
  $password = $request->post('password');
  $passwordConfirm = $request->post('password_confirm');

  $v = $app->validation;

  $v->validate([
    'Old password' => [$passwordOld, 'required|matchesCurrentPassword'],
    'Password' => [$password, 'required|min(6)'],
    'Confirm password' => [$passwordConfirm, 'required|matches(Password)'],
  ]);

  if ($v->passes()) {
    $user = $app->auth;

    $user->update([
      'password' => $app->hash->password($password),
    ]);

    $app->mail->send('email/auth/password/changed.php', [ 'user' => $user ], function($message) use ($user) {
      $message->to($user->email);
      $message->subject('You changed your password.');
    });

    $app->flash('success', 'Your password has been changed!');
    $app->response->redirect($app->urlFor('home'));
  }

  $app->render('auth/password/change.php', [
    'errors' => $v->errors(),
  ]);

})->name('password.change.post');
