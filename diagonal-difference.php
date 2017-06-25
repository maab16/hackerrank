<?php
// Option One
/*
 * Problem Link : https://www.hackerrank.com/challenges/diagonal-difference/
 * Author : Md Abu Ahsan Basir
 * Personal : www.code-press.com/resume
 * Hackerrank : https://www.hackerrank.com/abuahsan
 * GitHub : https://github.com/maab16/
 * Gitlab : https://gitlab.com/maab16 
 * Stackoverflow: https://stackoverflow.com/users/6677064/md-abu-ahsan-basir 
 */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}
//Main Code Started Here

$n = count($a);

function getDiagonalValue($n,array $matrix){
    $values = [];
    for($i = 0;$i < $n;$i++)
    {
           $values[] = $matrix[$i][$i];
    }
    return $values;
}

function getAntiDiagonalValue($n,array $matrix){
    $values = [];
    for($i=0;$i<$n;$i++)
    {
        $values[] = $matrix[$i][$n-1-$i];
        
    }
    return $values;
}

echo abs(array_sum(getDiagonalValue($n,$a)) - array_sum(getAntiDiagonalValue($n,$a)));

?>

<?php
// Option Two
/*
 * Problem Link : https://www.hackerrank.com/challenges/diagonal-difference/
 * Author : Md Abu Ahsan Basir
 * Personal : www.code-press.com/resume
 * Hackerrank : https://www.hackerrank.com/abuahsan
 * GitHub : https://github.com/maab16/
 * Gitlab : https://gitlab.com/maab16 
 * Stackoverflow: https://stackoverflow.com/users/6677064/md-abu-ahsan-basir 
 */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}
//Main Code Started Here
$n = count($a);

function getDiagonalValue($n,array $matrix){
    $values = 0;
    for($i = 0;$i < $n;$i++)
    {
           $values += $matrix[$i][$i];
    }
    return $values;
}

function getAntiDiagonalValue($n,array $matrix){
    $values = 0;
    for($i=0;$i<$n;$i++)
    {
        $values += $matrix[$i][$n-1-$i];
        
    }
    return $values;
}

echo abs(getDiagonalValue($n,$a) - getAntiDiagonalValue($n,$a));

?>