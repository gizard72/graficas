<?php 
    session_start(); // ← ¡Inicia la sesión!

    include 'conexion_be.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre_completo = $_POST['nombre_completo'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
                  VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

        $ejecutar = mysqli_query($conexion, $query);

        if ($ejecutar) {
            // Guardamos los datos del usuario en la sesión
            $_SESSION['usuario'] = $usuario;
            $_SESSION['correo'] = $correo;
            $_SESSION['nombre_completo'] = $nombre_completo;

            echo "<script>
                alert('Registro exitoso. ¡Ya estás logueado!');
                window.location.href = '../index.php'; // Redirige a la página principal
            </script>";
        } else {
            echo "<script>
                alert('Ocurrió un error al registrar. Intenta nuevamente.');
                window.history.back();
            </script>";
        }

    } else {
        echo "No se recibió ninguna solicitud POST.";
    }
?>
