<?php
function result() {
    $a = rand(-10, 10);
    $b = rand(-25, 25);

    echo "$a <br>";
    echo "$b <br>";

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    }
    elseif ($a < 0 && $b < 0) {
        echo $a * $b;
    } 
    elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
        echo $a + $b;
    }
}
result ($a, $b)
?>