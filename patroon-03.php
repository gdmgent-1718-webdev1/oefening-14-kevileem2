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
    for($i=1; $i<10; ++$i){
        for($j=0; $j<$i; ++$j){
            echo '<div class="circle_red"></div>';
        }
        echo '<br>';
    }
    
    ?>
    </div>
</body>
</html>