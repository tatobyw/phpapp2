<?php
    $x = 'Welcome to PHP';
    $y = 'My Website';
    $version = 4.1;
    $isTrue = true; //boolean
    $cars = array("BMW","Mercedes Benz","Porche");

        if($isTrue){
            echo $x."<br />";
            echo $y."<br />";
            echo $version."<br />";
            echo $cars[0]."<br />";
            var_dump($x)."<br />";
            var_dump($version)."<br />";
            // var_dump($cars);
        }
        else{
            echo "It is false";
        }
        echo "<br />";
        echo "end";
?>