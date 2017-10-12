<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
    <?php
    $i1 = 8;
    for($i=0; $i<9; ++$i){
        for($j=0; $j<9; ++$j){
            if($i == $j || $j == $i1){
                echo '<div class="circle_red"></div>';
            } elseif(($j < $i1 && $j > $i) || ($j > $i1 && $j < $i)){
                echo '<div class="circle_blue"></div>';
            }
            else {
                echo '<div class="circle_green"></div>';
            }
        }
        --$i1;
        echo '<br>';
    }
    
    ?>
    </div>
</body>
</html>