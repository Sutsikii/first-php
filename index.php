<?php

require 'modele/form.php';

$form = new Form(array(
    'username' => 'Roger'
));

// var_dump($form);
//     die();

echo("Webhook");
echo("Koukou");
echo("Il m'a dit de refaire un commit");

echo $form->input('username');
echo $form->submit();