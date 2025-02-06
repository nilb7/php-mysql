<?php

    $sport=['Audi','BMW','Benz','Ferrari'];

    array_push($sport, 'Porsche');
        print_r($sport);

    $count=count($sport);

    for($i=0; $i< $count; $i++){
        $sport[$i];
    }


    array_unshift($sport, 'eden');

    print_r($sport);

    echo ".<br>";
 

    array_shift($sport);

    print_r($sport);

    echo ".<br>";

    array_pop($sport);

    print_r($sport);

    echo ".<br>";

    $cars_slice = array_slice($sport, 1);

    print_r($cars_slice);






?>