<?php
session_start();
include 'conexion_be.php'; // Asegúrate de incluir tu archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta a la base de datos para verificar si el usuario existe
    $query = "SELECT * FROM usuarios WHERE correo = '$correo' LIMIT 1";
    $result = mysqli_query($conexion, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
        
        // Compara la contraseña
        if ($usuario['contrasena'] === $contrasena) {
            // Almacena los datos del usuario en la sesión
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['correo'] = $usuario['correo'];
            $_SESSION['nombre_completo'] = $usuario['nombre_completo'];
            
            // Redirige a index.php con la sesión iniciada
            header("Location: ../index.php");
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Correo electrónico no registrado.'); window.history.back();</script>";
    }
} else {
    echo "Método no permitido";
}
?>
