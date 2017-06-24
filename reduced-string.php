<?php

// Problem Link : https://www.hackerrank.com/challenges/reduced-string/problem

$handle = fopen ("php://stdin", "r");
function super_reduced_string($s){
    // Complete this function
    
    $s = str_split($s);
    $a=count($s);
    $i=0;
    while($i < $a && $a!=0){

        if($s[$i]== $s[$i+1]){
            
            for($j=$i;$j<$a;$j++){
                
                $s[$j]= $s[$j+2];
                $s[$j+1]= $s[$j+3];
            }
            $i=0;
            $a=$a-2;
        }else{
            $i++;
        }
    }
    
    if($a > 0)
        return implode('',$s);
    else
        return "Empty String";
}

fscanf($handle, "%s",$s);
$result = super_reduced_string($s);
echo $result . "\n";

?>