<?php

$app->get('/admin/user/comment/:username', $admin(), function($username) use ($app) {
  $user = $app->user->where('username', $username)->first();

  $app->render('admin/user/comment.php', [
    'user' => $user
  ]);

})->name('admin.user.comment');

$app->post('/admin/user/comment/:username', $admin(), function($username) use ($app) {
  $user = $app->user->where('username', $username)->first();
  $request = $app->request;

  $comment = $request->post('comment');

  $v = $app->validation;

  $v->validate([
      'Comment' => [$comment, 'required|max(254)']
  ]);

  if($v->passes()) {
    $user->update([
        'comment' => $comment
    ]);
    $app->mail->send('email/auth/commented.php', [  'user' => $user ], function($message) use ($user) {
      $message->to($user->email);
      $message->subject('New comment!');
    });
    $app->flash('success', 'Comment updated!');
    return $app->response->redirect($app->urlFor('user.profile', [ 'username' => $user->username ]));
  }

  $app->render('admin/user/comment.php', [
      'user' => $user,
      'errors' => $v->errors()
  ]);


})->name('admin.user.comment.post');
