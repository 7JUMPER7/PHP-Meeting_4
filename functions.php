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
        var_dump(array_filter($cars, function($item) {
            global $model;
            var_dump($model);
            return $item['model'] == $model;
        }));

        // error_reporting(0);
        // global $filename;
        // $fd = fopen($filename, 'a');
        // if($fd) {
        //     if(fputs($fd, "$manufacturer|$model|$price\n")) {
        //         return true;
        //     }
        //     fclose($fd);
        // }
        // return false;
    }
    function addCar2(&$cars, $model, $price, $year)
    {
        $filteredArr = array_filter($cars, function($item){
            global $model;
            var_dump($model);
            return $item["model"]==$model;
        });
        var_dump($filteredArr);
        // if(count($filteredArr)==0)
        // {
        //     $cars[] = ["model"=>$model, "price"=>$price, "year"=>$year];
        // }
        // else
        // echo "<div>Данная машина уже есть в массиве!</div>";
    }

    $cars = getCars();
    addCar2($cars, 'BMW', 'M3', 66000);
?>