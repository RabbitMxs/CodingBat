<?php 
include "formulariocadena.php";
$str = $_POST['cadena'];
$count = 0;
    $max = 0;
    for($i=0; $i<strlen($str); $i++){
        if($i==0){
            $count++;
            $max = $count;
        }
        else{
            if(substr($str,$i,1) == substr($str,$i-1,1)){
                $count++;
                if($max<$count){
                    $max = $count;
                }
            }   
            else{
                $count = 1;
            }
        }   
    }
    //Para ver si funciona
    $result ='<div class="result3"><label>'.$max.'</label> </div>';
 echo $result;



?>