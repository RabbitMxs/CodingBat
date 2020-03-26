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
            <div class="col-md-2 btn-group-vertical2 list" style="display: flow-root">
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
                        echo '<a class="btn btn-primary size-btn" href="?E='.$_GET['E'].'&action='.$_GET['E'].'">'.$document['nombre'].'</a >';
                    }
                ?>
                <a class="btn btn-primary size-btn" href="index.html" >Home</a >
            </div>
            <!--Datos del problema-->
            <div class="col-md-10" style="padding: 0% 0% 0% 0%;">
                <?php
                    session_start();
                    if(isset($_GET['action'])){
                        $_SESSION['doc']=$document;
                        $datos="";
                        $datos.='<div class="jumbotron" style=" margin: 0% 0% 0% 0%;height: 100%;">
                                <h1 class="display-3">'.$document['nombre'].'</h1>
                                <p class="lead"></p>'.$document['description'].'</p>
                                <hr class="my-4">
                                <div class="btn-group-horizontal">';
                                switch($_GET['action']){
                                    case 1:
                                        $datos.='<p class="lead-2">
                                                    <a class="btn btn-primary btn-lg" href="formularioardillas.php" role="button">Try</a>
                                                </p>';
                                    break;
                                    case 2:
                                        $datos.='<p class="lead-2">
                                                    <a class="btn btn-primary btn-lg" href="formulariodiferencia.php" role="button">Try</a>
                                                </p>';
                                    break;
                                    case 3:
                                        $datos.='<p class="lead-2">
                                                    <a class="btn btn-primary btn-lg" href="formulariocadena.php" role="button">Try</a>
                                                </p>';
                                    break;
                                    case 4:
                                        $datos.='<p class="lead-2">
                                                    <a class="btn btn-primary btn-lg" href="formularioswap.php" role="button">Try</a>
                                                </p>';
                                    break;
                                    case 5:
                                        $datos.='<p class="lead-2">
                                                    <a class="btn btn-primary btn-lg" href="formulariocontar.php" role="button">Try</a>
                                                </p>';
                                    break;
                            }
                            $datos.='<p class="lead-2">
                                        <a class="btn btn-primary btn-lg" href="jsDocument.php" role="button">Code</a>
                                    </p>
                                </div>
                            </div>';
                        echo $datos;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>