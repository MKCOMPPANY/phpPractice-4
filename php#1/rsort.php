<?php
function SortDecending($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$i] < $arr[$j]) {
                // Swap elements
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}
$numbers = array(5,5,7,84,2,6);
$sortedNumbers = SortDecending($numbers);
var_dump($sortedNumbers);
?>