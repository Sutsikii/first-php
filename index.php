<?php

require 'modele/form.php';

$form = new Form(array(
    'username' => 'Roger'
));

echo $form->input('username');
echo $form->submit();