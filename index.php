<?php

do {
    echo "Rolling back here...\n";
    sleep(1);

    $currentRoll = rand(1, 6);
    if ($currentRoll===6) {
        echo "You got a sixer 🥳 \n";
    } else {
        echo "You got a $currentRoll! \n";
    }

    echo "Want to roll again? (1/0)\n";
    $redoChoice = trim(fgets(STDIN));
} while (filter_var($redoChoice, FILTER_VALIDATE_BOOLEAN));
