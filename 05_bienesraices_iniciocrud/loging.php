<?php 

require 'includes/config/database.php';
    $db = conectardb();

    $errores = [];

    // Autentica usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        var_dump($_POST);

        $email = mysqli_real_escape_string( $db, filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(!$email){
            $errores [] = 'El email es obligatorio o no es valido';
        }
        if(!$password){
            $errores [] = 'El password es obligatorio';
        }

        
        if(empty($errores)){
            
        }
    }


    // Incluye el header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php  foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>
        
        <form action="" class="formulario" method="POST" novalidate>
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">Email:</label>
                <input type="email" placeholder="Tu email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Tu password" name="password" required>

                <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

            </fieldset>
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>