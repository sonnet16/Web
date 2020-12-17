<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = array('white', 'green', 'red');

    for ($i = 0; $i < count($color); $i++) {
        echo "  <li>{$color[$i]}</li>\n";
    }
    ?>
</body>

</html>