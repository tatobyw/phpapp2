<?php
    class Car {
        function Car(){
            // $msg = "Thailand";
            $this->model = "UV";
            return $this->model;
        }
    }
    $newCar = new Car();
    echo $newCar->Car();
?>