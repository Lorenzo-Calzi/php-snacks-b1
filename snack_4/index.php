<?php 

    $numbers = [];

    for($i = 0; $i < 15; $i++) {
        if(!in_array($i, $numbers)){
            array_push($numbers, (rand (0, 100))) ;
        }
    }

    var_dump($numbers) ;

?>