<?php 
include "formularioardillas.php";
$result="";
if($_POST['verano'] == "1"){
    $isSummer=true;
}else{
    $isSummer=false;
}
$temp=$_POST['temp']; 
    if($isSummer){

        if ($temp>=60 && $temp<=100){
            $juegan="true";
            //echo $juegan;
            $result.='<div class="result1" style="color:green;"><label>'.$juegan.'</label> </div>';
            echo $result;

        }else{
            $juegan="false";
            //echo $juegan;
            $result.='<div class="result1" style="color:red;"><label>'.$juegan.'</label> </div>';
            echo $result;

        }
    }
    else{

        if ($temp>=60 && $temp<=90){
            $juegan="true";
            //echo $juegan;
            $result.='<div class="result1" style="color:green;"><label>'.$juegan.'</label> </div>';
            echo $result;
        }else{
            $juegan="false";
            //echo $juegan;
            $result.='<div class="result1" style="color:red;"><label>'.$juegan.'</label> </div>';
            echo $result;

        }  
}
return  $result;
?>