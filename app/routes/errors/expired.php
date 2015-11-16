<?php

$app->get('/certificate/expired', function() use ($app) {
  $app->render('errors/expired.php');
})->name('expired');
