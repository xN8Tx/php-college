<?php 
    $arr = [];

    for($i = 0; $i <= 100; $i++) {
        $arr[$i] = $i;
    }
    var_dump($arr);
    echo "<br>";

    for($i = 0; $i <= 100; $i++) {
        if($arr[$i] > 0 && $arr[$i] <= 10) {
            echo $arr[$i];
            echo "<br>";
        }
    }
?>