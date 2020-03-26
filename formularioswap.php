<?php
include "inicio.php";
?>

    <fieldset>
        <form method="POST" action="swap.php">
            <div class="container-fluid" style="margin-top: 5%;">
                <div class="row">
                    <div class="col-md-8">
                        <label for="exampleInputEmail1">Ingrese la cadena</label>
                        <input type="text" name="cadena" class="form-control" id="cadena" placeholder="Ejemplo aa,ss,asd,ssa">
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