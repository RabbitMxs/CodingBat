<?php 
include "cambiar.php";
?>

        <fieldset>
            <form method="POST" action="diferencia.php">
                <div class="container-fluid"  style="margin-top: 3%;">
                    <div class="row">
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">#1</label>
                        <input type="text" name="1" class="form-control" id="1"  placeholder="Primer #">
                        </div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">#2</label>
                        <input type="text" name="2" class="form-control" id="2"  placeholder="Segundo #">
                        </div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">#3</label>
                        <input type="text" name="3" class="form-control" id="3"  placeholder="Tercero #">
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                        <div  >
                        <button type="submit" class="btn btn-primary">Comprobar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </fielset>
        <table class="table table-hover" style="width: 75%; margin:2%">
        <thead>
            <tr class="table-primary" style="text-align: center;">
                <th scope="row">Datos de entrada</th>
                <th>Datos de salida</th>
            </tr>
            <?php
            include "classTable.php";
                $table->showEvenly();

            ?>
        </thead>
        </table>
        <a class="btn btn-primary btn-lg return" href="problemas.php?E=2&action=2" role="button" style="margin: 5px;">Return</a>
    </body>
</html>
