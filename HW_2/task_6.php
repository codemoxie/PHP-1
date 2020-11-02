<?php

$a = rand(1, 30);
$b = rand(0, 10);

function power($val, $pow) {
    if ($pow == 0) {
        return 0;
    } elseif ($pow == 1) {
        return $val;
    } else {
    return $val * power($val, $pow - 1);
    }
};

echo power($a, $b);
?>