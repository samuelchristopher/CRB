<?php

use Carbon\Carbon;

$app->get('/admin/user/certify/:username', $admin(), function($username) use ($app) {
  $user = $app->user->where('username', $username)->first();

  $app->render('admin/user/certify.php', [
    'user' => $user
  ]);
})->name('admin.user.certify');

$app->post('/admin/user/certify/:username', $admin(), function($username) use ($app) {

  $request = $app->request;

  $link = $request->post('link');
  $name = $request->post('name');
  $time = $request->post('time');

  $v = $app->validation;

  $v->validate([
    'Certificate name' => [$name, 'required'],
    'Certification link' => [$link, 'required|url'],
    'Certification validity' => [$time, 'required']
  ]);

  $user = $app->user->where('username', $username)->first();
  $timestamp = Carbon::parse("+{$time}")->timestamp;

  if ($v->passes()) {
    $app->mail->send('email/auth/certified.php', [  'user' => $user ], function($message) use ($user) {
      $message->to($user->email);
      $message->subject('You have been certified!');
    });

    $user->certs()->create([
        'certificate_name' => $name,
        'certificate_url' => $link,
        'certificate_expires' => $timestamp
    ]);

    // $user->certifyAccount($link);

    $app->flash('success', 'Certification complete!');
    return $app->response->redirect($app->urlFor('admin.user.all'));
  }

  $app->render('admin/user/certify.php', [
    'user' => $user,
    'errors' => $v->errors()
  ]);

})->name('admin.user.certify.post');
