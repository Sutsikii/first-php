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
echo("Loosing hope");
echo("Just a linux bug !");
echo("Haha its was !");
echo $form->input('username');
echo $form->submit();