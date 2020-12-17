<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = array(
        "color" => array("a" => "Red", "b" => "Green", "c" => "white"),
        "numbers" => array(1, 2, 3, 4, 5, 6), "holes" => array("First", 5 => "Second", "Third")
    );
    echo $color["holes"][5];
    echo "<br>";
    echo $color["color"]["a"];
    ?>
</body>

</html>