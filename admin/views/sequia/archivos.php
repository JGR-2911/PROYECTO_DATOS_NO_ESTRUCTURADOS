<h1 class="text-center">Archivos
    <div class="container-fluid">
        <div class="row">
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">nombre del archivo</th>
                            <th scope="col">operación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nReg = 0;
                        foreach ($data as $documento):
                            $nReg++; ?>
                            <tr>
                                <td>
                                    <?php echo $documento->_id?>
                                </td>
                                <td>
                                    <?php echo $documento->nombre ?>
                                </td>

                                <td>
                                    <a href="../views/sequia/descargar.php?_id=<?php echo $documento->_id ?>" type="button"
                                        class="btn btn-info" target="blank">Descargar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <th>
                                Se encontraron
                                <?php echo $nReg ?> registros.
                            </th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>