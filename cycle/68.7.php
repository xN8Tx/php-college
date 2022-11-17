<?php 
    $arr = [];

    for($i = 0; $i <= 100; $i++) {
        $arr[$i] = $i;
    }
    var_dump($arr);
    echo "<br>";

    foreach($i = 0; $i <= 100; $i++) {
        if($arr[$i] == 5) {
            echo $arr[$i];
            echo "<br>";
        }
    }
?>