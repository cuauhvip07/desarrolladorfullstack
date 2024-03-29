<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    $auth = $_SESSION['loging'] ?? false;
    
    if(!isset($inicio)){
        $inicio = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Imagen logo">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Imagen barra menu">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="dark-mode">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if($auth):?>
                            <a href="/cerrar-sesion">Cerrar Sesion</a>
                        <?php endif;?>
                    </nav>
                </div>

            </div> <!-- .barra -->
            <?php if($inicio){
                echo "<h1>Venta de casas y departamentos exclusivos de lujo</h1>";
            }
            ?>
        </div>
    </header>

    <?php echo $contenido; ?>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date('Y')?></p>
    </footer>
    
    <script src="../build/js/bundle.min.js"></script>
</body>
</html>