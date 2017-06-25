<?php
/*
 * Problem Link : https://www.hackerrank.com/challenges/fibonacci-modified
 * Author : Md Abu Ahsan Basir
 * Personal : www.code-press.com/resume
 * Hackerrank : https://www.hackerrank.com/abuahsan
 * GitHub : https://github.com/maab16/
 * Gitlab : https://gitlab.com/maab16 
 * Stackoverflow: https://stackoverflow.com/users/6677064/md-abu-ahsan-basir 
 */

 $_fp = fopen("php://stdin", "r");
//get the integer.
$integers = fscanf($_fp, "%d %d %d",$a,$b,$n);
function fibo($a,$b,$n){
    static $i = 3;
    static $result;
    if($n==0) 
        return $b; 
    if($i <= $n){
        $i++;
        $result = bcadd(bcpow($b, 2), $a);
        fibo($b,$result,$n);
    }
    return $result;
}
echo fibo($a,$b,$n);
fclose($_fp);