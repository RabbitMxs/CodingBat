<?php 
include "cambiar.php";
?>
<fieldset>
<form method="POST" action="cadena.php">
<div class="container-fluid"  style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-8">
        <label for="exampleInputEmail1">Cadena</label>
      <input type="text" name="cadena" class="form-control" id="cadena"  placeholder="Ingrese la cadena">
		</div>
		<div class="col-md-2">
        <div  >
        <label>  </label>
        <button type="submit" class="btn btn-primary">Comprobar</button>
		</div>
    </div>
</form>
</fieldset>
		
</body>
</html>