<?php

$myBasket = [
    'apple 🍎' => '1kg',
    'pear 🍐' => '2kg',
    'orange 🍊' => '3kg',
    'potato 🥔' => '4kg',
    'tomato 🍅' => '5kg',
];

echo "We will be getting: \n\n";
foreach ($myBasket as $key => $value) {
    echo "$value of $key\n";
}