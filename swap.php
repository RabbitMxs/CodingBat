<?php
include "formularioswap.php";
$cadena = $_POST['cadena'];
$strings=explode (",",$cadena);
$result=array();
$map = array();
$bandera=false;
for ($i = 0; $i < count($strings); $i++) {
  $c  =  substr($strings[$i],0,1);
  for ($j=0; $j < count($map); $i++) { 
      if(key($map) == $c){
        $bandera = true; break;
      }else{
        $bandera = false; break;
      }
      next($map);
  }
  if ($bandera)
  {
    $p =  $map[$c];
    unset($map[$c]);  
    $result[$i] = $result[$p];
    $result[$p]=$strings[$i];
  }
  else
  {
    $result[$i]=$strings[$i];
    $map[$c] = $i;
  }
}
    $result2="";
    for ($i=0; $i < count( $result) ; $i++) { 
        $result2 .= $result[$i];
        $result2.=", ";
    }
    echo'<div class="result5"><label>'.$result2.'</label> </div>';
?>