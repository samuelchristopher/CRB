<?php

$app->get('/dev', function() use ($app) {
  $app->render('dev/main.php');
})->name('dev');
