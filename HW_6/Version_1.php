<?php

    if (isset($_GET['first']))
        $first = (int)($_GET['first']);
    else $first = rand(1, 20);

    if (isset($_GET['second'])) 
		$second = (int)($_GET['second']);
    else $second = rand(1, 15);

    if (isset($_GET['operation']))
		$operation = htmlspecialchars($_GET['operation']);
    else 
		$operation = '+';
    
    if (isset($first) && isset($second)) {
	    switch ($operation) {  
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
                if ($second !== 0) {
                    $result = $first / $second;
                } else $result = 'Атата!!!';
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
    
    <form action="#" method="get">
        <div class="line">
            <label for="first">Первая цифра</label>
            <input type="text" name="first" value="<?= $first?>">
        </div>
        <div class="line">
        <label for="operation">Знак</label>
        <select name="operation">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>
        </div>
            <div class="line">
            <label for="second">Вторая цифра</label>
            <input type="text" name="second" value="<?= $second?>">
        </div>
        <input type="submit" value=" = ">
        <div class="line">
            <label for="">Результат</label>
            <span> <?= $result?> </span>
        </div>
    </form>

</body>
</html>