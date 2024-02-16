<?php 

try {
    function consultar_info(){
        // require
        require 'database.php';
        
        // Consulta SQL
        $con = "SELECT * FROM servicios;";

        // Traer informacion del sql
        $consulta = mysqli_query($db,$con);
        return $consulta;

        // Cerrar sql
        mysqli_close($db);
    }
} catch (\Throwable $th) {
    echo $th;
}


?>