<?php

$app->get('/compan/privacy', function() use ($app) {
  $app->render('company/privacy.php');
})->name('company.privacy');
