<?php 

$conexion = mysqli_connect("localhost","root","","login_register_db");

if (!$conexion) {
    // Mostrar el error si la conexión falla
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos";
}

?>
