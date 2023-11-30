<?php 


$thestring = "mukhtar";
$var_arr = array();
$j = mb_strlen($thestring);
for($k = 0 ;$k < $j; $k++){
    $char = mb_substr($thestring,$k,1);
    $var_arr[$k] = $char;
}
print_r($var_arr);
?>