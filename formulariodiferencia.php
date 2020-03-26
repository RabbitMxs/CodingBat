<?php 
include "cambiar.php";
?>

<fieldset>
<form method="POST" action="diferencia.php">
<div class="container-fluid"  style="margin-top: 5%;">
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
        <div class="col-md-3">
        <div  >
        <button type="submit" class="btn btn-primary">Comprobar</button>
        </div>
		</div>
	</div>
</div>


</form>
</fielset>

</body>
</html>
