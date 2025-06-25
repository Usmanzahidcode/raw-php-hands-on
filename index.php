<?php

$availableAccessories = [
    'Headphones',
    'Charger',
    'Sim-Tray',
    'Sim-Ejecting-Pin',
    'Phone-case',
];

echo "Here are the available accessories:\n";
foreach ($availableAccessories as $index => $accessory) {
    $index++;
    echo "\t($index) $accessory\n";
}

$choice = (int) trim(fgets(STDIN));

echo match($choice) {
    1 => 'Headphones',
    2 => 'Charger',
    3 => 'Sim-Tray',
    4 => 'Sim-Ejecting-Pin',
    5 => 'Phone-case',
    default => throw new \Exception('Unexpected match value'),
};