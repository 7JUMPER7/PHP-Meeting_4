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
                if(count($car) > 2) {
                    $cars[] = ['manufacturer' => $car[0], 'model' => $car[1], 'price' => $car[2]];
                }
            }
            fclose($fd);
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
            fclose($fd);
        }
        return $counter;
    }

    function addCar($manufacturer, $model, $price) {
        $cars = getCars();
        $result = array_filter($cars, function($item) use ($model) {
            return $item['model'] == $model;
        });
       
        if(!$result) {
            error_reporting(0);
            global $filename;
            $fd = fopen($filename, 'a');
            if($fd) {
                if(fputs($fd, "$manufacturer|$model|$price\n")) {
                    return 1; //Success
                }
                fclose($fd);
            }
            return 0; // Fail
        }
        return -1; // Already exsits
    }
?>