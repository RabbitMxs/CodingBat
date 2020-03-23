<?php


class Problemas {

    function __construct(){ }

function execProblem($idProblem){
    
    switch ($idProblem) {
        case '1':
            $this->squirrelPlay($temp,$isSummer);
        break;
        case '2':
            $this->evenlySpaced($a,$b,$c);
        break;
        case '3':
            $this->maxBlock($str);
        break; 
        case '4':
            $this->allSwap($stringsArray = array());
        break;
        case '5':
            $this->countClumps($nums = array());
        break;
    }
}


function squirrelPlay($temp,$isSummer=false){
    if($isSummer){
        return ($temp>=60 && $temp<=100)?true:false;
    }
    else{
        return ($temp>=60 && $temp<=90)?true:false;
    }
}

function evenlySpaced($a,$b,$c){
     $temp;
     
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
    return ($b - $a) == ($c - $b);
}

function maxBlock($str){
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
    return $max;
}

function allSwap($arrayStr = array()){

}

function countClumps($nums = array()){
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
    return $count;
}
}
$oProblem = new Problemas();
//echo ($oProblem->squirrelPlay(100,false))?'Las ardillas juegan':'Las ardillas no juegan';
//echo ($oProblem->evenlySpaced(10,6,2))?'true':'false';
//echo $oProblem->maxBlock('hoooo00000000laa');
//$nums = array(0=>2,1=>3,2=>3,3=>2,4=>6,);
//echo $oProblem->countClumps($nums);

?>
