
<?php
function Max_grades($Scores) {
    $length = count($Scores);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($Scores[$i] > $Scores[$j]) {
                // Swap elements
                $temp =$Scores[$i];
                $Scores[$i] = $Scores[$j];
                $Scores[$j] = $temp;
            }
        }
    }
    return $Scores;
  }  
$grades = array(12,6,7,1,8,18,5,3);
$Max = Max_grades($grades);
echo "Maximum of  Scores : " .($Max[count($Max)-1]);
?>
