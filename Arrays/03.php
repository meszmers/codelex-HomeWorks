<?php
//Check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$x = readline("Enter the value to search for: \n");

if (in_array($x, $numbers) !== false) {
    echo "It is there.\n";
} else echo "Its not there.\n";






