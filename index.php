<?php 
    echo 'scrum!';
    if (true) echo '<br>true';
    $test = 0;
    if(isset($test)) {
        echo '<br><h1>Isset: +</h1>';
    } else {
        echo '<br><h1>Isset: -</h1>';
    };
    if(empty($test)) {
        echo '<br><h1>Empty: +</h1>';
    } else {
        echo '<br><h1>Empty: -</h1>';
    };
?>

<!-- 
    .
    .=
    $str = 'hello';
    $str .= 'world';
    i = 2;
    i += 10; 

    Ложеподобные 
    0
    "0"
    FALSE
    NULL
    ""
-->