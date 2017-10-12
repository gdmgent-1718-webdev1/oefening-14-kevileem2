<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css_index.css">
</head>
<body>
    <?php
        for ($i = 1; $i < 13; ++$i){
            if ($i < 10){
                echo '<a href="patroon-0', $i, '.php">patroon-0', $i, '</a>';
            } else {
                echo '<a href="patroon-', $i, '.php">patroon-', $i, '</a>';
            }
            echo '<br>';
        }
    ?>
</body>
</html>