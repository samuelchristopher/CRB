<?php

$app->get('/test', function() use ($app) {
  $user = $app->user->where('email', 'testemailofmine@gmail.com')->first();

  // $user->certs()->create([
  //   'certificate_name' => 'certificate 2',
  //   'certificate_url' => 'http://gmail.com',
  // ]);

  $cs = $user->certs()->get();

  die($cs);

});
