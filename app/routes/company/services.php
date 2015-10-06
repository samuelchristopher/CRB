<?php

$app->get('/company/services', function() use ($app) {
  $app->render('company/services.php');
})->name('company.services');
