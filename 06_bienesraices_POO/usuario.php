<?php
    // Creacion de un usuario y hasheo del mismo

    require 'includes/app.php';

    $db = conectardb();

    // Creacion de un emial y password
    $email = "correo@correo.com";
    $password = "12345";

    $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    

    // Query crear un usuario 
    $query = "INSERT INTO usuarios (email,password) VALUES ('{$email}','{$passwordHash}');";

    mysqli_query($db,$query);





?>