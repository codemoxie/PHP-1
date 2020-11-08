<?php
$a = rand(1, 33);
$b = rand(1, 55);

// Функции с четырьмя основными арифметическими операциями
function sum ($arg1, $arg2) {
    return $a + $b;
};

function deduct ($arg1, $arg2) {
    return $a - $b;
};

function mult ($arg1, $arg2) {
    return $a * $b;
};

function divide ($arg1, $arg2) {
    return $a / $b;
};

// Функуция вычисления операции
function mathOp ($arg1, $arg2, $op) {
    switch ($op) {
        case "+":
            return sum($arg1, $arg2);
        break;
        case "-":
            return deduct($arg1, $arg2);
        break;
        case "*":
            return mult($arg1, $arg2);
        break;
        case "/":
            return divide($arg1, $arg2);
        break;
    }
}

echo mathOp ($a, $b, "*");
?>