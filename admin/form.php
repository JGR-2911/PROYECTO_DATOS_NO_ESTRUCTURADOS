<?php
include("views/header.php");
include("views/menu.php");
?>
<div class="home-section">
    <div class="home-content">
        <i class="fa-solid fa-bars"></i>
        <span class="text">Indicador de Sequías</span>
    </div>
    <section class="banner-2">
        <div class="banner-content">
            <h1>NUEVOS DATOS</h1>
            Llene el formulario en caso de tener nuevos datos a analizar
        </div>
    </section>
    &nbsp;
    <div class="containerB">
        <div class="container">
            <form action="" method="POST">
                <h2>Formulario:</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="region">Región</label>
                        <input type="text" name="region" placeholder="Ingresa la región a analizar">
                    </div>
                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" placeholder="Ingresa el estado a analizar">
                    </div>
                    <div class="input-box">
                        <label for="cultivos">Daños en cultivos y pastos</label>
                        <select name="cultivos" id="cultivos">
                            <option value="">Retraso de la siembra</option>
                            <option value="">Algunos daños</option>
                            <option value="">Probables pérdidas</option>
                            <option value="">Pérdidas mayores</option>
                            <option value="">Pérdidas excepcionales</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="incendios">Riesgo de incendios forestales</label>
                        <select name="incendios" id="incendios">
                            <option value="">Existe riesgo</option>
                            <option value="">Probable riesgo</option>
                            <option value="">Alto riesgo</option>
                            <option value="">Riesgo extremo</option>
                            <option value="">Riesgo excepcional</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="restriccion">Restricción de agua</label>
                        <select name="restriccion" id="restriccion">
                            <option value="">Sin restricción</option>
                            <option value="">Restricción voluntaria</option>
                            <option value="">Restricción impuesta</option>
                            <option value="">Restricción generalizada</option>
                            <option value="">Situación de emergencia</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="Iprecipitacion">Índice de precipitación</label>
                        <input type="text" name="Iprecipitacion" placeholder="En mm">
                    </div>
                    <div class="input-box">
                        <label for="Itemperatura">Índice de temperatura</label>
                        <input type="text" name="Itemperatura" placeholder="En °C">
                    </div>
                    <div class="input-box">
                        <label for="Ihumedad">Índice de humedad</label>
                        <input type="text" name="Ihumedad" placeholder="En %">
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php
include("views/footer.php");
?>