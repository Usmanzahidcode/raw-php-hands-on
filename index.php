<?php

function generateOrdinalSuffix(int $number): string {
    if ($number==1) {
        $suffix = 'st';
    } elseif ($number==2) {
        $suffix = 'nd';
    } elseif ($number==3) {
        $suffix = 'rd';
    } else {
        $suffix = 'th';
    }

    return $suffix;
}

$password = "usman";
$tries = 0;
$maxTries = 5;

while ($tries <= $maxTries) {
    $tries++;

    echo "Enter your password: ";
    $input = trim(fgets(STDIN));
//    $input = readline("Enter your password: ");
    if ($input==$password) {
        echo "Yay you guessed it on the $tries" . generateOrdinalSuffix($tries) . " try, yay!\n";
        exit();
    }

    if ($tries >= $maxTries) {
        echo "You failed!\n";
        break;
    }

    echo "Try again!\n";
}