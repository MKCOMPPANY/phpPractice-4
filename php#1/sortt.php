
<?php
function SortAscending($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$i] > $arr[$j]) {
                // Swap elements
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}
$numbers = array(12, 6,7, 1, 5);
$sortedNumbers = SortAscending($numbers);
print_r($sortedNumbers);
?>
