<?php

$fruits = [
    'Apple',
    'Pear',
    'Orange',
    'Banana',
    'Coconut',
    'Almond',
];

echo "Available fruits: \n";
foreach ($fruits as $index => $fruit) {
    $index++;
    echo "\t$fruit ($index)\n";
}

echo "Which fruit do you like? (Pick the number)\n";
$input = trim(fgets(STDIN));

switch ($input) {
    case '1':
        echo "Good choice! No more doctors huh!\n";
        break;
    case '2':
        echo "Meh!\n";
        break;
    case '3':
        echo "Summer gone!\n";
        break;
    case '4':
        echo "Nice choice you chimp!\n";
        break;
    case '5':
        echo "Coco Coco!\n";
        break;
    case '6':
        echo "The Vegge debate is still going!\n";
        break;
    default:
        echo "Wrong answer!\n";
        break;
}