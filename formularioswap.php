<?php
include "cambiar.php";
?>

    <fieldset>
        <form method="POST" action="swap.php">
            <div class="container-fluid" style="margin-top: 5%;">
                <div class="row">
                    <div class="col-md-8">
                        <label for="exampleInputEmail1">Ingrese la cadena</label>
                        <input type="text" name="cadena" class="form-control" id="cadena" placeholder="Ejemplo aa,ss,asd,ssa">
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-2">
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
                $table->showSwap();
            ?>
        </thead>
    </table>
    <a class="btn btn-primary btn-lg return" href="problemas.php?E=4&action=4" role="button" style="margin: 5px;">Return</a>
  </body>
</html>	