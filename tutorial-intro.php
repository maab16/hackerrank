<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($handle, "%d",$v);
fscanf($handle, "%d",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
/*
 * Option 1
 * ShortCut Option
 * Use PHP buildin function array_search
 * Return $key if $v matched
*/

//echo array_search($v,$ar);

/*
 * Option 2
 * Same as PHP buildin function array_search
*/
function checkValue($v,$ar){
    if(in_array($v,$ar)){
        foreach($ar as $key=>$value){
            if($value == $v)
                return $key;
        }
    }
}

echo checkValue($v,$ar);

fclose($handle);
?>