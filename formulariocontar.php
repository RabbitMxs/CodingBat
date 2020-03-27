<?php
include "cambiar.php";
?>
    <filedset>
      <form method="POST" action="contar.php">
      <div class="container-fluid"  style="margin-top: 3%;">
        <div class="row">
          <div class="col-md-8">
              <label for="exampleInputEmail1">Ingrese los numeros</label>
              <input type="text" name="cadena" class="form-control" id="cadena"  placeholder="Ejemplo 2,1,2,3,2,1,1">
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-2">
              <div>
                <button type="submit" class="btn btn-primary">Comprobar</button>
                <a class="btn btn-primary btn-lg" href="problemas.php?E=5&action=5" role="button" style="margin: 5px;">Return</a>
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
                $table->showClumps();
            ?>
        </thead>
    </table>
  </body>
</html>		