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

    for($i=0; $i<9; ++$i){
        for($j=0; $j<9; ++$j){
            echo '<div class="circle_red"></div>';
        }
        echo '<br>';
    }
    
    ?>
    </div>
</body>
</html>