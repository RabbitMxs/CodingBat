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
                <!--<h3 class="display-5" style="color:#fff;"> Categoria</h3>-->
                <!--<img src="images\Logo.png" alt="logo" style="width: 90%; margin: 0% 5% 5% 5%;"/>-->
                <!--<button type="button" class="btn btn-primary size-btn" >Button</button>-->
                <?php
                    require 'vendor\autoload.php';
                    $client=new MongoDB\Client;
                    $db=$client->coding;
                    $probCollection= $db->problema;

                    if(isset($_GET['E'])){
                        switch($_GET['E']){
                            case 1:
                                $document=$probCollection->findOne(['category'=>'Logic 1']);
                            break;
                            case 2:
                                $document=$probCollection->findOne(['category'=>'Logic 2']);
                            break;
                            case 3:
                                $document=$probCollection->findOne(['category'=>'String 3']);
                            break;
                            case 4:
                                $document=$probCollection->findOne(['category'=>'Map 2']);
                            break;
                            case 5:
                                $document=$probCollection->findOne(['category'=>'Array 3']);
                            break;
                        }
                        echo '<h3 class="display-5" style="color:#fff;">'.$document['category'].'</h3>';
                        echo '<a class="btn btn-primary size-btn" href="?E=5&action=5">'.$document['nombre'].'</a >';
                    }

                    /*$client=new MongoDB\Client;
                    $db=$client->coding;
                    $result=$db->createCollection('problema');
                    var_dump($result);*/
                ?>
                <a class="btn btn-primary size-btn" href="" >Home</a >
            </div>
            <!--Datos del problema-->
            <div class="col-md-10" style="padding: 0% 0% 0% 0%;">
                <?php
                    if(isset($_GET['action'])){
                        echo '<div class="jumbotron" style=" margin: 0% 0% 0% 0%;height: 100%;">
                                <h1 class="display-3">'.$document['nombre'].'</h1>
                                <p class="lead"></p>'.$document['description'].'</p>
                                <hr class="my-4">
                                <div class="btn-group-horizontal">
                                    <p class="lead-2">
                                        <a class="btn btn-primary btn-lg" href="#" role="button">Try</a>
                                    </p>
                                    <p class="lead-2">
                                        <a class="btn btn-primary btn-lg" href="#" role="button">Code</a>
                                    </p>
                                </div>    
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>