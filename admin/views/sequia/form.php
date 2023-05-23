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
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" placeholder="Ingresa el estado a analizar">
                    </div>
                    <div class="input-box">
                        <label for="cultivos">Daños en cultivos y pastos</label>
                        <select name="cultivos" id="cultivos">
                            <option value="1">Retraso de la siembra</option>
                            <option value="2">Algunos daños</option>
                            <option value="3">Probables pérdidas</option>
                            <option value="4">Pérdidas mayores</option>
                            <option value="5">Pérdidas excepcionales</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="incendios">Riesgo de incendios forestales</label>
                        <select name="incendios" id="incendios">
                            <option value="1">Existe riesgo</option>
                            <option value="2">Probable riesgo</option>
                            <option value="3">Alto riesgo</option>
                            <option value="4">Riesgo extremo</option>
                            <option value="5">Riesgo excepcional</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="restriccion">Restricción de agua</label>
                        <select name="restriccion" id="restriccion">
                            <option value="1">Sin restricción</option>
                            <option value="2">Restricción voluntaria</option>
                            <option value="3">Restricción impuesta</option>
                            <option value="4">Restricción generalizada</option>
                            <option value="5">Situación de emergencia</option>
                        </select>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>