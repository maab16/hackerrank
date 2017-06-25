<?php
/*
 * Problem Link : https://www.hackerrank.com/challenges/recursive-digit-sum
 * Author : Md Abu Ahsan Basir
 * Personal : www.code-press.com/resume
 * Hackerrank : https://www.hackerrank.com/abuahsan
 * GitHub : https://github.com/maab16/
 * Gitlab : https://gitlab.com/maab16 
 * Stackoverflow: https://stackoverflow.com/users/6677064/md-abu-ahsan-basir 
 */
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%s %d",$n,$k);
$p = bcmul($n,$k);
function super_digit($num){
    
    $sum = 0;
    
    if($num > 9){
        $splits = str_split($num);
        foreach($splits as $split){
            $sum += $split;
        }
        if($sum > 9)
            super_digit($sum);
        else
            echo $sum;
    }
}
super_digit($p);

?>