<?php
require __DIR__.'/model.php';
function all(){
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users');
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function find($id){
    $connection = connection();
    $query = $connection->query('SELECT id, name FROM users WHERE id ='.$id);
    return $query->fetch(PDO::FETCH_OBJ);
}


