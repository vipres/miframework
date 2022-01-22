<?php


require __DIR__.'/app/helpers.php';
require __DIR__.'/app/user.model.php';

view('users/show', [
    'user' =>  find($_GET['id'])
]);


