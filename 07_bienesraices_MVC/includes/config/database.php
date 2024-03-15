<?php

function conectardb(): mysqli{
    $db = new mysqli('localhost','root','','bienesraices_crud');

    if(!$db){
        echo 'Error, no se conceto';
        exit;
    }
    return $db;
}