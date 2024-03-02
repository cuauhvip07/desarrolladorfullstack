<?php 

require 'includes/config/database.php';
    $db = conectardb();

    $errores = [];

    // Autentica usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $email = mysqli_real_escape_string( $db, filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(!$email){
            $errores [] = 'El email es obligatorio o no es valido';
        }
        if(!$password){
            $errores [] = 'El password es obligatorio';
        }

        
        if(empty($errores)){
            // Revisar si el usuario existe;
            $query = "SELECT * FROM usuarios WHERE email = '{$email}';";
            $resultado = mysqli_query($db,$query);
            
            // Saber si el usuario existe
            if($resultado -> num_rows){
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                // Verificar si el password es correcto o no 
                $auth = password_verify($password,$usuario['password']);
                
                if($auth){
                    // El usuario esta autenticado
                    session_start();

                    // Llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['loging'] = true;
                    echo "<pre>";
                    var_dump($_SESSION);
                    echo "</pre>";
                }else{
                    $errores[] = 'La contraseña es incorrecta';
                }

            }else{
                $errores [] = 'El usuario no existe';
            }
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
        
        <form action="" class="formulario" method="POST">
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