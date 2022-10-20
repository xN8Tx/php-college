<!-- <?php 
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
     

?> -->
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
<?php 
    $arr = ['First', 'Second', 'Third'];
    function func(){
       $arr = [1, 2, 4, 5];
       $sum = 0;
       foreach($arr as $item) {
            $sum += $item; 
       }
       echo $sum;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
            foreach($arr as $item) {
                echo '<li>'.$item.'</li>';
            }
            func();
            echo '<br>';
            for ($i = 1; $i <= 5; $i++) {
                echo "xxx $i yyy<br>";
            }
            echo time();
        ?>
    </ul> 
    <form action="" method="GET">
	    <input name="test1">
	    <input name="test2">
	    <input type="submit">
    </form>
    <?php 
        var_dump($_GET);
    ?>   
</body>
</html>