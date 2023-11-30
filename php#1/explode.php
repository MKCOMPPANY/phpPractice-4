<?php 

function explodee($array,$sep)
{
    $array_to_str = "";
    foreach($array as $key )
    {
        $array_to_str.=$key.$sep;
    }
    return $array_to_str;
}
$array = array(1,3,4,5,6,7);
var_dump(explodee($array ,","));
?>