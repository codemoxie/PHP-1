<?php
$a = rand(1, 33);
$b = rand(1, 55);
$op = array_rand("+", "-", "*", "/");

// Функции с четырьмя основными арифметическими операциями
function sum () {
    echo $a + $b;
};

function deduct () {
    echo $a - $b;
};

function mult () {
    echo $a * $b;
};

function divide () {
    echo $a / $b;
};

// Функуция вычисления операции
function mathOp ($arg1, $arg2, $op) {
    switch ($op) {
        case "+":
            echo sum($arg1, $arg2);
        break;
        case "-":
            echo deduct($arg1, $arg2);
        break;
        case "*":
            echo mult($arg1, $arg2);
        break;
        case "/":
            echo divide($arg1, $arg2);
        break;
    }
}

echo mathOp ($a, $b, $op);
?>