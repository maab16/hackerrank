<?php

/*
 * Problem Link : https://www.hackerrank.com/challenges/reduced-string
 * Author : Md Abu Ahsan Basir
 * Personal : www.code-press.com/resume
 * Hackerrank : https://www.hackerrank.com/abuahsan
 * GitHub : https://github.com/maab16/
 * Gitlab : https://gitlab.com/maab16 
 * Stackoverflow: https://stackoverflow.com/users/6677064/md-abu-ahsan-basir 
 */

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