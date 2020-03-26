<!DOCTYPE html>
<html lang="en" class="size">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans|Ubuntu&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Problemas</title>
</head>
<body class="size">
    <table class="table table-hover">
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
</body>
</html>