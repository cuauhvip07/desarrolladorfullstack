<?php

function concectardb(): mysqli{
    $db = mysqli_connect('localhost','root','','bienesraices_crud');

    if(!$db){
        echo 'Error, no se conceto';
        exit;
    }
    return $db;
}