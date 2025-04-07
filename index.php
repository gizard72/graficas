<?php
session_start();
$logueado = isset($_SESSION['usuario']);
$nombre = $logueado ? $_SESSION['nombre_completo'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Menú lateral tipo slide -->
<!-- Menú lateral tipo slide -->
<div id="slideMenu" class="slide-menu">
    <button id="closeSlideMenu" class="close-button">&times;</button>
    <h3 id="menutxt">Menu</h3>

    <!-- Si el usuario está logueado, muestra el nombre y el botón de logout -->
    <?php if ($logueado): ?>
        <div class="user-box">
            <p>Bienvenido, <strong><?= htmlspecialchars($nombre) ?></strong></p>
            <form method="post" action="php/logout.php">
                <button type="submit" class="logout-button">Cerrar sesión</button>
            </form>
        </div>
    <?php else: ?>
        <!-- Si no está logueado, muestra el botón de login -->
        <button id="loginButton" class="login-button" onclick="window.location.href='login.php'">Login</button>
    <?php endif; ?>

    <!-- Menú de navegación -->
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#" onclick="loadPage('textos')">Gráficas</a></li>
        <li><a href="#" onclick="loadPage('ideas')">Detalles Técnicos</a></li>
    </ul>
    <!-- Imagen al final del menú -->
    <img src="/src/resources/UTC.png" alt="Unabomber" class="unabomber-slide">
</div>

    <!-- Botón para abrir el menú -->
    <button id="openSlideMenu" class="open-button">☰</button>

    <!-- Contenedor principal -->
    <div id="content">
        <header class="cabezera">          
            <div class="cabezapagina">
                <h1>Bienvenido a nuestro proyecto</h1>
            </div>
        </header>

        <section class="contenido-home">
            <h2>Contenido Principal</h2>
            <!-- Aquí puedes cargar el contenido dinámico -->
             
        </section>
    </div>

    <footer>
        &copy; 2024 Broke Gil. Todos los derechos reservados.
    </footer>

    <script src="script.js"></script>
    <script src="pages.js"></script>
</body>
</html>
