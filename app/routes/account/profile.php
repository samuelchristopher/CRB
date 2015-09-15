<?php

$app->get('/account/profile', $authenticated(), function() use ($app) {
  $app->render('account/profile.php');
})->name('account.profile');

$app->post('/account/profile', $authenticated(), function() use ($app) {

  $request = $app->request;

  $email = $request->post('email');
  $firstName = $request->post('first_name');
  $lastName = $request->post('last_name');
  $companyAddress = $request->post('company_address');
  $telephoneNumber = $request->post('telephone_number');

  $v = $app->validation;

  $v->validate([
    'Email' => [$email, 'required|email|uniqueEmail'],
    'First name' => [$firstName, 'alpha|max(50)'],
    'Last name' => [$lastName, 'alpha|max(50)'],
    'Company address' => [$companyAddress, 'required'],
    'Telephone number' => [$telephoneNumber, 'required|number'],
   ]);

   if ($v->passes()) {
     $app->auth->update([
       'email' => $email,
       'first_name' => $firstName,
       'last_name' => $lastName,
       'company_address' => $companyAddress,
       'telephone_number' => $telephoneNumber,
      ]);

      $app->flash('success', 'Your details have been updated!');
      $app->response->redirect($app->urlFor('account.profile'));
   }

   $app->render('account/profile.php', [
      'errors' => $v->errors(),
      'request' => $request
    ]);

})->name('account.profile.post');
