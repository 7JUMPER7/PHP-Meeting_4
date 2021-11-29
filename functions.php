<?php
    $filename = 'cars.txt';

    function getCars() {
        error_reporting(0);
        global $filename;
        $fd = fopen($filename, 'r');
        $cars = [];
        if($fd) {
            while(!feof($fd)) {
                $carStr = fgets($fd);
                $car = mb_split('[|]', $carStr);
                $cars[] = ['manufacturer' => $car[0], 'model' => $car[1], 'price' => $car[2]];
            }
        }
        return $cars;
    }

    function getCarsCount() {
        error_reporting(0);
        global $filename;
        $fd = fopen($filename, 'r');
        $counter = 0;
        if($fd) {
            while(!feof($fd)) {
                $str = fgets($fd);
                $obj = mb_split('[|]', $str);
                if(count($obj) > 2) {
                    $counter++;
                }
            }
        }
        return $counter;
    }
?>