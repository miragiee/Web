<?php 

    include "TrafficLight.php";

    $trafficlight = new TrafficLight("Yellow");
    echo "Начальный цвет";
    echo "<br>";

    echo $trafficlight->GetColor();
    echo "<br>";
    echo "<br>";
    
    echo "Работа";
    echo "<br>";
    for ($i = 0; $i < 5; $i++){
        $trafficlight->Work();
        echo $trafficlight->GetColor();
        echo "<br>";
    }

?>