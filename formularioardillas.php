<?php 
include "cambiar.php";
?>
        <fieldset>
            <form method="POST" action="ardillas.php">
                <div class="container-fluid" style="margin-top: 5%;">
                    <div class="row" style="padding: 0% 5% 0% 5%">
                        <div class="col-md-5">
                            <label for="exampleInputEmail1">Temperatura</label>
                            <input type="text" name="temp" class="form-control" id="temp" placeholder="Ingrese la temperatura en °F">
                        </div>
                        <div class="col-md-4">
                            <label>¿Es verano?</label>
                            <div>
                                <input type="radio" id="verano" name="verano" value="1">
                                <label>Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="verano" name="verano" value="2">
                                <label>No</label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Comprobar</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
        <table class="table table-hover" style="width: 75%; margin:2%">
            <thead>
                <tr class="table-primary" style="text-align: center;">
                    <th scope="row">Datos de entrada</th>
                    <th>Datos de salida</th>
                </tr>
                <?php
                include "classTable.php";
                    $table->showSquirrel();

                ?>
            </thead>
        </table>
    </body>
</html>