<div class="home-section">
    <div class="home-content">
        <i class="fa-solid fa-bars"></i>
        <span class="text">Indicador de Sequías</span>
    </div>
    <section class="banner-3">
        <div class="banner-content">
            <h1>UPLOAD</h1>
            Sube un archivo de importancia en el tópico de las sequías para la población.
        </div>
    </section>
    <div class="containerUp">
        <div class="wrapper">
            <header>File Uploader</header>
            <form action="views/sequia/subir_archivo.php" class="form" method="POST"  enctype="multipart/form-data">
                <input class="file-input" type="file" name="archivo" hidden>
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Browse File to Upload</p>
                <div class="button-container">
                    <button type="submit">Subir archivo</button>
                </div>
            </form>
        </div>
        <?php
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $databaseName = "sequia";
        $collectionName = "archivos";

        // Construye la consulta para obtener todos los documentos de la colección
        $query = new MongoDB\Driver\Query([]);

        // Ejecuta la consulta
        $data = $manager->executeQuery("$databaseName.$collectionName", $query);

        // Recorre los documentos y muestra los datos
        include_once "archivos.php";
        ?>
    </div>
</div>