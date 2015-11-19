<?php

$app->get('/company/clients', function() use ($app) {
  $clients = [
    [
        'name' => 'Shell',
        'logo' => 'http://fillmurray.com/200/200',
        'text' => 'Ethical authentic locavore DIY, echo park blue bottle swag. Pickled marfa single-origin coffee schlitz, butcher drinking vinegar tofu selfies echo park ethical actually banh mi celiac vinyl stumptown. Roof party meggings post-ironic, scenester pug yuccie tofu.'
    ],
    [
        'name' => 'Shell',
        'logo' => 'http://fillmurray.com/250/250',
        'text' => 'Ethical authentic locavore DIY, echo park blue bottle swag. Pickled marfa single-origin coffee schlitz, butcher drinking vinegar tofu selfies echo park ethical actually banh mi celiac vinyl stumptown. Roof party meggings post-ironic, scenester pug yuccie tofu.'
    ],
    [
        'name' => 'Shell',
        'logo' => 'http://fillmurray.com/255/255',
        'text' => 'Ethical authentic locavore DIY, echo park blue bottle swag. Pickled marfa single-origin coffee schlitz, butcher drinking vinegar tofu selfies echo park ethical actually banh mi celiac vinyl stumptown. Roof party meggings post-ironic, scenester pug yuccie tofu.'
    ],
    [
        'name' => 'Shaell',
        'logo' => 'http://fillmurray.com/256/256',
        'text' => 'Ethical authentic locavore DIY, echo park blue bottle swag. Pickled marfa single-origin coffee schlitz, butcher drinking vinegar tofu selfies echo park ethical actually banh mi celiac vinyl stumptown. Roof party meggings post-ironic, scenester pug yuccie tofu.'
    ],
  ];

  $app->render('company/clients.php', [
    'clients' => $clients
  ]);
})->name('company.clients');
