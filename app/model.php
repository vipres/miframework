<?php

function connection (){


return new PDO(
    'mysql:host=localhost; dbname=miframework',
    'root',
    '',
);
}
