<div class="home-section">
    <div class="home-content">
        <i class="fa-solid fa-bars"></i>
        <span class="text">Indicador de Sequías</span>
    </div>
    <section class="banner-1">
        <div class="banner-content">
            <h1>BIENVENIDO</h1>
            Con este sistema puedes consultar mediante el ingreso de datos en un sencillo formulario la existencia de
            una
            sequia.
        </div>
    </section>
    <br> <br>
    <section class="contenido-index">
        <div class="container-fluid">
            <div class="row" style="background-color:#fff;">
                <div class="col-1">&nbsp;</div>
                <div class="col-4">
                    <h1 class="titulos_verde">Consulta de datos</h1>
                    <p style="text-align: justify;">
                        En esta página web se busca que el visitante seleccione los datos correspondientes
                        al estado y los indicadores para que se pueda clasificar dentro de las diferentes
                        categorias con las que se cuentan, estas tomadas de la página del Monitor de Sequías
                        México, establecido por CONAGUA.
                        <br>
                        <b>Link:
                        </b>https://smn.conagua.gob.mx/es/climatologia/monitor-de-sequia/monitor-de-sequia-en-mexico
                        <br><br>
                        Dentro del sitio web se cuenta con 3 opciones para el visitante, ya sea poder ingresar los datos
                        de un estado para que este sea analizado, el subir archivos de importancia en el tópico de la
                        sequías y
                        por ultimo consultar las gráficas de los estados en cuanto a su nivel de sequía.
                    </p>
                </div>
                <div class="col-2" style="text-align: center">
                    <h3 class="titulos_azul">Nuevos datos</h3>
                    <img src="images/bd.png" alt="" height="100" width="100">
                </div>
                <div class="col-2">
                    <h3 class="titulos_azul">Upload</h3>
                    <img src="images/upload.png" alt="" height="100" width="100">
                </div>
                <div class="col-2">
                    <h3 class="titulos_azul">Graficas</h3>
                    <img src="images/graficas.png" alt="" height="100" width="100">
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
            <div class="row" style="background-color:#fff;">
                <div class="col-1">&nbsp;</div>
                <div class="col-5" style="text-align: center">
                    <img src="images/onu.png" alt="" height="150" width="500">
                </div>
                <div class="col-5">
                    <h1 class="titulos_verde">Objetivo</h1>
                    <p style="text-align: justify;">
                        Este sitio web se llevo acabo buscando cubrir el objetivo No. 6 de los <b>Objetivos de
                            desarrollo
                            sostenible</b> de la ONU. El cual corresponde a: <b>Agua limpia y Saneamiento</b>.
                        Especificamente la meta No. 6.4, la cual consta de lo siguiente:
                    </p>
                    <p style="text-align: justify; color:#46751C;">
                        <b>"De aquí a 2030, aumentar considerablemente el uso eficiente de los recursos hídricos en
                            todos
                            los sectores y asegurar la sostenibilidad de la extracción y el abastecimiento de agua dulce
                            para hacer frente a la escasez de agua y reducir considerablemente el número de personas que
                            sufren falta de agua".</b>
                    </p>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
            <br><br><br><br>
            <h1 class="text-center titulos_azul"><b>Registros</b>
            </h1>
            <?php
            $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
            $databaseName = "sequia";
            $collectionName = "reporte";

            // Construye la consulta para obtener todos los documentos de la colección
            $query = new MongoDB\Driver\Query([]);

            // Ejecuta la consulta
            $data = $manager->executeQuery("$databaseName.$collectionName", $query);
            ?>
            <div class="containerBody">
                <div class="containerSuc">
                    <?php $nReg = 0;
                    foreach ($data as $documento):
                        $nReg++; ?>
                        <div class="cardS" style="--clr:#13133b;">
                            <div class="imgBx">
                                <img src="images/sequia.png">
                            </div>
                            <div class="contentSuc">
                                <h3>
                                    <?php echo $documento->estado; ?>
                                </h3>
                                <p>
                                    <b>Daños en cultivos y pastos:</b>
                                    <?php echo $documento->cultivos; ?>
                                    <br>
                                    <b>Riesgo de incendios forestales:</b>
                                    <?php echo $documento->incendios; ?>
                                    <br>
                                    <b>Restricción de agua:</b>
                                    <?php echo $documento->restriccion; ?>
                                    <br>
                                    <b>Promedio:</b>
                                    <?php echo $documento->promedio; ?>
                                    <br>
                                    <a href="views/sequia/eliminar_registro.php?_id=<?php echo $documento->_id ?>"
                                        type="button" class="btn btn-light" target="blank">Eliminar</a>
                                        <a href="views/sequia/eliminar_registro.php?_id=<?php echo $documento->_id ?>"
                                        type="button" class="btn btn-light" target="blank">Editar</a>
                                </p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
</div>