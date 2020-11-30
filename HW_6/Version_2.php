<?php

$first = (int)($_POST['first']);
$second = (int)($_POST['second']);

if (isset($_POST['operation'])) {
    if ($first === '' || $second === '') {
        $result = 'Введите данные';
    } else {
        switch($_POST['operation']) {
            case '+':
                $result = $first + $second;
            break;
            case '-':
                $result = $first - $second;
            break;
            case '*':
                $result = $first * $second;
            break;
            case '/':
                if ($second === 0) {
                    $result = 'Учите правила математики!';
                }
                $result = $first / $second;
            break;
            default:
                $result = 'Ooops!!!';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <style>
        form {
            display: flex;
        }
        .line {
            width: 10%;
            margin: 8px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    
    <form action="#" method="post">
        <div class="line">
            <label for="first">Первая цифра</label>
            <input type="text" name="first" value="">
        </div>
        <div>
        <label for="operation">Выберите действие</label><br>
            <input type="submit" name="operation" value="+">
            <input type="submit" name="operation" value="-">
            <input type="submit" name="operation" value="*">
            <input type="submit" name="operation" value="/">
        </div>
            <div class="line">
            <label for="second">Вторая цифра</label>
            <input type="text" name="second" value="">
        </div>
        <div class="line">
            <label for="">Результат</label>
            <span> = </span>
            <span> <?= $result?> </span>
        </div>
    </form>

</body>
</html>