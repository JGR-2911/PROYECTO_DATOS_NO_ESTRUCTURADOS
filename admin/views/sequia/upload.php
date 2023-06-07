<div class="home-section">
    <div class="home-content">
        <i class="fa-solid fa-bars"></i>
        <span class="text">Indicador de Sequías</span>
    </div>
    <section class="banner-3">
        <div class="banner-content">
            <h1>UPLOAD</h1>
            Sube un archivo para que se analicen los datos.
        </div>
    </section>
    <div class="containerUp">
        <div class="wrapper">
            <header>File Uploader</header>
            <form action="views/sequia/prueba.php" class="form" method="POST"  enctype="multipart/form-data">
                <input class="file-input" type="file" name="archivo" hidden>
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Browse File to Upload</p>
                <div class="button-container">
                    <button type="submit">Subir archivo</button>
                </div>
            </form>
        </div>
    </div>
</div>