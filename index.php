<?php


require __DIR__.'/app/helpers.php';
require __DIR__.'/app/user.model.php';



view('users/index', [
    'users' => all()
]);
