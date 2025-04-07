const pages = {
    textos: `
        <header class="cabezera">
            <h1 class="textosTitulo">Análisis de Deserción Estudiantil</h1>
        </header>
        <section class="contenido">
            <div class="contenidoBody">
                <h2>Proyecto de Análisis utilizando CRISP-DM</h2>
                
                <h3>1. Objetivo del Proyecto</h3>
                <p>Analizar los factores que influyen en la deserción estudiantil en secundaria, identificando patrones predictivos.</p>
                
                <h3>2. Metodología</h3>
                <p>Se aplicó la metodología CRISP-DM con las siguientes etapas:</p>
                <ul>
                    <li>Comprensión del negocio</li>
                    <li>Comprensión de datos</li>
                    <li>Preparación de datos</li>
                    <li>Modelado (supervisado y no supervisado)</li>
                    <li>Evaluación</li>
                </ul>
                
                <h3>3. Resultados Clave</h3>
                <div class="resultados-container">
                    <div class="resultado-card">
                        <h4>Modelos de Clasificación</h4>
                        <ul>
                            <li>Árbol de Decisión: 83.08% accuracy</li>
                            <li>Random Forest: 85.13% accuracy</li>
                            <li>XGBoost: 84.62% accuracy</li>
                        </ul>
                    </div>
                    
                    <div class="resultado-card">
                        <h4>Variables Importantes</h4>
                        <ol>
                            <li>Number_of_Failures</li>
                            <li>Final_Grade</li>
                            <li>Grade_1</li>
                            <li>Grade_2</li>
                            <li>Age</li>
                        </ol>
                    </div>
                    
                    <div class="resultado-card">
                        <h4>Clusters Identificados</h4>
                        <ul>
                            <li>Cluster 0: Buen desempeño académico</li>
                            <li>Cluster 1: Bajo desempeño académico</li>
                            <li>Cluster 2: Desempeño intermedio con factores de riesgo</li>
                        </ul>
                    </div>
                </div>
                
                <h3>4. Recomendaciones</h3>
                <ul>
                    <li>Implementar sistema de alerta temprana</li>
                    <li>Programas de tutoría diferenciados</li>
                    <li>Monitoreo especial para estudiantes con múltiples fallas</li>
                </ul>
                <img src="/src/resources/2DCONPCA.png" alt="VISUALIZACIÓN 2D CON PCA" width="400" height="250">

                <img src="/src/resources/CLUSTER.png" alt="VISUALIZACIÓN DE CLUSTER CON PCA" width="400" height="250">
                
                <img src="/src/resources/distribucionedad.png" alt="DISTRIBUCIÓN DE EDAD POR ESTADO DE DESERCIÓN" width="400" height="250">

                <img src="/src/resources/distribucion1.png" alt="DISTRIBUCIÓN DE DESERCOÓN ESTUDIANTIL" width="400" height="250">

                <img src="/src/resources/mapacalor.png" alt="MAPA DE CALOR DE CORRELACIONES" width="400" height="250">

                <img src="/src/resources/VarImporArbolDecision.png" alt="ARBOL DE DECISIÓN" width="400" height="250">

                <img src="/src/resources/VarImporlRandomForest.png" alt="RANDOM FOREST" width="400" height="250">

                <img src="/src/resources/VarImporXGBOST.png" alt="XGBOOST" width="400" height="250">
                    
                <button class="btn-ver-mas" onclick="loadPage('ideas')">Ver detalles técnicos</button>
            </div>
        </section>
    `,
    
    ideas: `
        <header class="cabezera">
            <h1 class="textosTitulo">Detalles Técnicos del Análisis</h1>
        </header>
        <section class="contenido">
            <div class="contenidoBody">
                <h2>Análisis Técnico Profundo</h2>
                
                <h3>Preparación de Datos</h3>
                <ul>
                    <li>Dataset original: 649 observaciones, 34 variables</li>
                    <li>Variables categóricas codificadas con LabelEncoder</li>
                    <li>Datos numéricos estandarizados con StandardScaler</li>
                    <li>División 70-30 (entrenamiento-prueba)</li>
                </ul>
                
                <h3>Modelado Supervisado</h3>
                <div class="modelos-table">
                    <table>
                        <tr>
                            <th>Modelo</th>
                            <th>Accuracy</th>
                            <th>F1-Score</th>
                            <th>ROC AUC</th>
                        </tr>
                        <tr>
                            <td>Árbol de Decisión</td>
                            <td>0.8308</td>
                            <td>0.3774</td>
                            <td>0.6273</td>
                        </tr>
                        <tr>
                            <td>Random Forest</td>
                            <td>0.8513</td>
                            <td>0.2564</td>
                            <td>0.5712</td>
                        </tr>
                        <tr>
                            <td>XGBoost</td>
                            <td>0.8462</td>
                            <td>0.2857</td>
                            <td>0.5818</td>
                        </tr>
                    </table>
                </div>
                
                <h3>Análisis de Clusters</h3>
                <p>Se identificaron 3 clusters óptimos usando K-Means:</p>
                <ul>
                    <li>Método del codo y silhouette score para determinar k óptimo</li>
                    <li>PCA para visualización en 2D</li>
                </ul>
                
                <h3>Componentes Principales</h3>
                <ul>
                    <li>27 componentes explican 95% de varianza</li>
                    <li>Primeros 2 componentes capturan ~30% de varianza</li>
                </ul>
                
                <button class="btn-volver" onclick="loadPage('textos')">Volver a resumen</button>
            </div>
        </section>
    `
};

function loadPage(page) {
    const contentDiv = document.getElementById('content');
    if (pages[page]) {
        contentDiv.innerHTML = pages[page];
    } else {
        contentDiv.innerHTML = `<p>Página no encontrada</p>`;
    }
}