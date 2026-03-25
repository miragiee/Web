<?php
    class TrafficLight{
        public $color = "";

        public function __construct($color) {
            if (empty($color)) $this->color = "Red";

            $this->color = $color;
        }

        public function Work(){
            switch($this->color){
                case "Red": $this->color = "Green"; break;
                case "Yellow": $this->color = "Red"; break;
                case "Green": $this->color = "Yellow"; break;
            }
        }

        public function GetColor(){
            return " <br/> Сейчас горит " . $this->color;
        }
    }

    $TrafficLight = new TrafficLight("Red");
    echo " <br/> <br/> Начальный Цвет: " . $TrafficLight->GetColor();
    $TrafficLight->Work();
    echo " <br/> <br/> Сменил цвет " . $TrafficLight->GetColor();
    $TrafficLight->Work();
    echo " <br/> <br/> Сменил цвет " . $TrafficLight->GetColor();
    $TrafficLight->Work();
    echo " <br/> <br/> Сменил цвет " . $TrafficLight->GetColor();
    $TrafficLight->Work();
    echo " <br/> <br/> Сменил цвет " . $TrafficLight->GetColor();
?>
