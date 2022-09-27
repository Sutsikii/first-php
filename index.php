<?php

require 'modele/form.php';

$form = new Form(array(
    'username' => 'Roger'
));

// var_dump($form);
//     die();

echo("Il a dit c'est bon ( je le crois pas )");
echo("Un retard?");


echo $form->input('username');
echo $form->submit();