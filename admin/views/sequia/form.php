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
            <form action="views/sequia/insert.php" method="POST">
                <h2>Formulario:</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" required>
                            <option value="" selected disabled>Selecciona un Estado</option>
                            <option value="1">Aguascalientes</option>
                            <option value="2">Baja California</option>
                            <option value="3">Baja California Sur</option>
                            <option value="4">Campeche</option>
                            <option value="5">Chiapas</option>
                            <option value="6">Chihuahua</option>
                            <option value="7">Ciudad de México</option>
                            <option value="8">Coahuila</option>
                            <option value="9">Colima</option>
                            <option value="10">Durango</option>

                            <option value="11">Estado de Mexico</option>
                            <option value="12">Guanajuato</option>
                            <option value="13">Guerrero</option>
                            <option value="14">Hidalgo</option>
                            <option value="15">Jalisco</option>
                            <option value="16">Michoacan</option>
                            <option value="17">Morelos</option>
                            <option value="18">Nayarit</option>
                            <option value="19">Nuevo Leon</option>
                            <option value="20">Oaxaca</option>

                            <option value="21">Puebla</option>
                            <option value="22">Queretaro</option>
                            <option value="23">Quintana Roo</option>
                            <option value="24">San Luis Potosi</option>
                            <option value="25">Sinaloa</option>
                            <option value="26">Sonora</option>
                            <option value="27">Tabasco</option>
                            <option value="28">Tamaulipas</option>
                            <option value="29">Tlaxcala</option>
                            <option value="30">Veracruz</option>
                            <option value="29">Yucatan</option>
                            <option value="30">Zacatecas</option>
                        </select>
                    </div>
                    <div class="input-box" >
                        <label for="cultivos">Daños en cultivos y pastos</label>
                        <select name="cultivos" id="cultivos" required>
                            <option value="" selected disabled>Selecciona una opción</option>
                            <option value="1">Retraso de la siembra</option>
                            <option value="2">Algunos daños</option>
                            <option value="3">Probables pérdidas</option>
                            <option value="4">Pérdidas mayores</option>
                            <option value="5">Pérdidas excepcionales</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="incendios">Riesgo de incendios forestales</label>
                        <select name="incendios" id="incendios" required>
                            <option value="" selected disabled>Selecciona una opción</option>
                            <option value="1">Existe riesgo</option>
                            <option value="2">Probable riesgo</option>
                            <option value="3">Alto riesgo</option>
                            <option value="4">Riesgo extremo</option>
                            <option value="5">Riesgo excepcional</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="restriccion">Restricción de agua</label>
                        <select name="restriccion" id="restriccion"  required>
                            <option value="" selected disabled>Selecciona una opción</option>
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