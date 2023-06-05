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
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durango">Durango</option>

                            <option value="Estado de Mexico">Estado de Mexico</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacan">Michoacan</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo Leon">Nuevo Leon</option>
                            <option value="Oaxaca">Oaxaca</option>

                            <option value="Puebla">Puebla</option>
                            <option value="Queretaro">Queretaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosi">San Luis Potosi</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatan">Yucatan</option>
                            <option value="Zacatecas">Zacatecas</option>
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