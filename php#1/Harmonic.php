<?php 
function harmonic($n)
{
    $sum = 0;
    for($i = 1; $i <= $n; $i++)
    {
        $sum+=1/$i;
    }
    return $sum; 
}
echo harmonic(4);
?>