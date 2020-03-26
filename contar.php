<?php 
include "formulariocontar.php";
 $cadena = $_POST['cadena']; 
 $nums=explode (",",$cadena);
    $count = 0;
    $i = 0;
    while($i < count($nums)) {
        $val = $nums[$i];
        $i++;
        $length = 1;
        while($i < count($nums) && $nums[$i] == $val) {
            $i++;
            $length++;
        }                                       
        if($length > 1)
            $count++;
    }
    $result= '<div><label>'.$count.'</label> </div>';                                       
    echo $result;
?>


