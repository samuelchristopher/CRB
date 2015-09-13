<?php

$app->get('/admin/user/certify/:username', $admin(), function($username) use ($app) {
  $user = $app->user->where('username', $username)->first();

  $app->render('admin/user/certify.php', [
    'user' => $user
  ]);
})->name('admin.user.certify');

$app->post('/admin/user/certify/:username', $admin(), function($username) use ($app) {

  $request = $app->request;

  $link = $request->post('link');

  $v = $app->validation;

  $v->validate([
    'Certification link' => [$link, 'required|url']
  ]);

  $user = $app->user->where('username', $username)->first();

  if ($v->passes()) {


      $user->certifyAccount($link);

      $app->flash('success', 'Certification complete!');
      $app->response->redirect($app->urlFor('admin.user.all'));
  }

  $app->render('admin/user/certify.php', [
    'user' => $user,
    'errors' => $v->errors()
  ]);

})->name('admin.user.certify.post');
