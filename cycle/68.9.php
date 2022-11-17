<?php 
    $arr = [];
    $sum = 0;

    for($i = 0; $i <= 100; $i++) {
        $arr[$i] = $i;
    }
    var_dump($arr);
    echo "<br>";

    for($i = 0; $i <= 100; $i++) {
        $sum += $arr[$i];
    }
    echo $sum / 101;
?>