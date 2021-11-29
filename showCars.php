<?php
    include_once('./functions.php');

    echo "<div class='container'>";
    $cars = getCars();
    if(count($cars) !== 0) {
        foreach($cars as $index => $car) {
            echo "<div class='carCard'>";
            echo "<h3>".$car["manufacturer"]."</h3>";
            echo "<p>".$car["model"]."</p>";
            echo "<h2>$".$car["price"]."</h2>";
            echo "</div>";
        }
    } else {
        echo "<h1 style='color: white;'>Пусто</h1>";
    }
    echo "</div>";
?>