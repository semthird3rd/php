<html>
    <body>

    <?php
    // while loop
    $num = 1;
    while ($num <= 5) {
        echo $num . "<br>";
        $num++;
    }

    // for loop
    for ($i = 1; $i <= 5; $i++) {
        echo $i . "<br>";
    }

    // foreach loop
    $colors = array("red", "green", "blue");
    foreach ($colors as $color) {
        echo $color . "<br>";
    }
?>




    </body>
</html>