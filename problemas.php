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
    <div class="container-fluid size">
        <div class="row size">
            <!--Lista de  problemas-->
            <div class="col-md-2 btn-group-vertical2 list">
                <h3 class="display-5" style="color:#fff;"> Categoria</h3>
                <!--<img src="images\Logo.png" alt="logo" style="width: 90%; margin: 0% 5% 5% 5%;"/>-->
                <button type="button" class="btn btn-primary size-btn" >Button</button>
                <button type="button" class="btn btn-primary size-btn">Home</button>
            </div>
            <!--Datos del problema-->
            <div class="col-md-10" style="padding: 0% 0% 0% 0%;">
                <div class="jumbotron" style=" margin: 0% 0% 0% 0%;height: 100%;">
                    <h1 class="display-3">Titulo del problema</h1>
                    <p class="lead"></p>Enunciado del problema.</p>
                    <hr class="my-4">
                    <div class="btn-group-horizontal">
                        <p class="lead-2">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Try</a>
                        </p>
                        <p class="lead-2">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Code</a>
                        </p>
                        <?php
                            require 'vendor\autoload.php';
                            $client=new MongoDB\Client;
                            $db=$client->coding;
                            $result=$db->createCollection('problema');
                            var_dump($result);
                        ?>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>