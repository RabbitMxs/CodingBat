<?php
include "cambiar.php";
?>
<filedset>
<form method="POST" action="contar.php">
<div class="container-fluid"  style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-8">
        <label for="exampleInputEmail1">Ingrese los numeros</label>
      <input type="text" name="cadena" class="form-control" id="cadena"  placeholder="Ejemplo 2,1,2,3,2,1,1">
		</div>
		<div class="col-md-4">
        <div>
        <button type="submit" class="btn btn-primary">Comprobar</button>
        </div>
		</div>
	</div>
</div>
</form>
</fieldset>

</body>
</html>