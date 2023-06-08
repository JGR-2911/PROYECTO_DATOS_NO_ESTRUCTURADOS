<h1 class="text-center" style="font-size:40px;">Archivos
    <div class="container-fluid">
        <div class="row">
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr bgcolor="#292E31" style="align-items:center; color: #B9E87F;">
                            <th scope="col" width="100%" style="font-size: 25px;">Nombre del archivo</th>
                            <th scope="col" style="font-size: 25px;">Operación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nReg = 0;
                        foreach ($data as $documento):
                            $nReg++; ?>
                            <tr bgcolor="#8AA9F8 ">
                                <td style="font-size: 18px;">
                                    <?php echo $documento->nombre ?>
                                </td>

                                <td>
                                    <a href="views/sequia/descargar.php?_id=<?php echo $documento->_id ?>" type="button"
                                        class="btn btn-light" target="blank">Descargar</a>
                                    <a href="views/sequia/eliminar_archivo.php?_id=<?php echo $documento->_id ?>"
                                        type="button" class="btn btn-light" target="blank">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th style="font-size: 15px; text-align: center;">
                                Se encontraron
                                <?php echo $nReg ?> registros.
                            </th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>