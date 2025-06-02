<?php

$myArray = [
    "Usman",
    10,
    "10",
    10.0,
    [],
    0,
    null,
    (new stdClass()),
    [
        "Usman",
        [
            10,
            [
                "10",
                "10" + "10.11111111111111111111"
            ]
        ]
    ],
];
var_dump($myArray);