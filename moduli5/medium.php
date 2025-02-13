<?php

$products = array(
    array(
        'product' => 'water',
        'price' => 1
    ),
    array(
        'product' => 'crisps',
        'price' =>  2
    ),
    array(
        'product' => 'milka',
        'price' => 3
    )
    );

function total_price($products){
    $sum = 0;
    foreach($products as $product){
        $sum+=$product['price'];
           
    }
    return $sum;

}
echo total_price($products)




?>