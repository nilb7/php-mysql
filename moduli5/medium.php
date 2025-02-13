<?php

$produts = array(
    array(
        'product' => 'water',
        'price' => 1
    )
    array(
        'product' => 'crisps',
        'price' =>  2
    )
    array(
        'product' => 'milka',
        'price' => 3
    )
    );

function total_price($produts){
    $sum = 0;
    foreach($products as $product){
        $sum+=$product['price'];
            return $sum
    }

}
total_price($products)




?>