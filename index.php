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
    <div id="slideMenu" class="slide-menu">
        <button id="closeSlideMenu" class="close-button">&times;</button>
        <h3 id="menutxt">Menu</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#" onclick="loadPage('textos')">Gráficas</a></li>
            <li><a href="#" onclick="loadPage('ideas')">Ideas</a></li>
        </ul>
        <img src="/src/resources/UTC.png" alt="Unabomber" class="unabomber-slide">
    </div>

    <!-- Botón para abrir el menú -->
    <button id="openSlideMenu" class="open-button">☰</button>

    <!-- Contenedor principal -->
    <div id="content">
        <header class="cabezera">
            <?php if ($logueado): ?>
                <div class="user-box">
                    <p>Bienvenido, <strong><?= htmlspecialchars($nombre) ?></strong></p>
                    <form method="post" action="php/logout.php">
                        <button type="submit" class="logout-button">Cerrar sesión</button>
                    </form>
                </div>
            <?php else: ?>
                <button id="loginButton" class="login-button" onclick="window.location.href='login.php'">Login</button>
            <?php endif; ?>            

            <div class="cabezapagina">
                <h1>Proyecto</h1>
            </div>
        </header>

        <section class="contenido-home">
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
