<?php 
include "formulariodiferencia.php";
$solucion;
$temp;
$a= $_POST['1'];
$b= $_POST['2'];
$c= $_POST['3'];
if($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}               
if($b > $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
}                                 
if($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}                         
 if(($b - $a) == ($c - $b)){
     $solucion = "verdadero";
     $result= '<div class="result2" style="color:green;"><label>'.$solucion.'</label> </div>';
     echo $result;
 }else{
    $solucion = "Falso";
    $result= '<div class="result2" style="color:red;"><label>'.$solucion.'</label> </div>';
    echo $result;
 }



?>