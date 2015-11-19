<?php

$app->get('/company/terms', function() use ($app) {
  $app->render('company/terms.php');
})->name('company.terms');
