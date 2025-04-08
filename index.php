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
    <img src="src/resources/UTC.png" alt="Unabomber" class="unabomber-slide">
</div>

    <!-- Botón para abrir el menú -->
    <button id="openSlideMenu" class="open-button">☰</button>

    <!-- Contenedor principal -->
    <div id="content">
        <header class="cabezera">          
            <div class="cabezapagina">
                <h1>Dashboard</h1>
            </div>
        </header>

        <section class="contenido-home">
        <div class="dashboard-item">
    <h4>Visualización 2D con PCA</h4>
    <a href="src/resources/2DCONPCA.png" target="_blank">
        <img src="src/resources/2DCONPCA.png" alt="VISUALIZACIÓN 2D CON PCA" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Visualización de Clusters con PCA</h4>
    <a href="src/resources/CLUSTER.png" target="_blank">
        <img src="src/resources/CLUSTER.png" alt="VISUALIZACIÓN DE CLUSTER CON PCA" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Distribución de Edad por Estado de Deserción</h4>
    <a href="src/resources/distribucionedad.png" target="_blank">
        <img src="src/resources/distribucionedad.png" alt="DISTRIBUCIÓN DE EDAD POR ESTADO DE DESERCIÓN" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Distribución de Deserción Estudiantil</h4>
    <a href="src/resources/distribucion1.png" target="_blank">
        <img src="src/resources/distribucion1.png" alt="DISTRIBUCIÓN DE DESERCIÓN ESTUDIANTIL" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Mapa de Calor de Correlaciones</h4>
    <a href="src/resources/mapacalor.png" target="_blank">
        <img src="src/resources/mapacalor.png" alt="MAPA DE CALOR DE CORRELACIONES" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Árbol de Decisión</h4>
    <a href="src/resources/VarImporArbolDecision.png" target="_blank">
        <img src="src/resources/VarImporArbolDecision.png" alt="ÁRBOL DE DECISIÓN" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>Random Forest</h4>
    <a href="src/resources/VarImporlRandomForest.png" target="_blank">
        <img src="src/resources/VarImporlRandomForest.png" alt="RANDOM FOREST" width="400" height="250">
    </a>
</div>

<div class="dashboard-item">
    <h4>XGBoost</h4>
    <a href="src/resources/VarImporXGBOST.png" target="_blank">
        <img src="src/resources/VarImporXGBOST.png" alt="XGBOOST" width="400" height="250">
    </a>
</div>

             
        </section>
    </div>

    <footer>
        &copy; 2024 Broke Gil. Todos los derechos reservados.
    </footer>

    <script src="script.js"></script>
    <script src="pages.js"></script>
</body>
</html>
