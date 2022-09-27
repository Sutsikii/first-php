<?php

require 'modele/form.php';

$form = new Form(array(
    'username' => 'Roger'
));

// var_dump($form);
//     die();

echo("Hello webhook");
echo("Users Rules fixed");
echo("Users Rules again...");
echo $form->input('username');
echo $form->submit();