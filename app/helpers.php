<?php

function view($view, array $params = []){
    extract($params);

     ob_start();
     require __DIR__."/../view/$view.html.php";

    $content = ob_get_clean();
    require __DIR__.'/../view/layout/app.html.php';
}
