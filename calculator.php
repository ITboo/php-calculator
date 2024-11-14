<?php
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);
define('OPERATION_MINUS', 'minus');
define('OPERATION_PLUS', 'plus');
define('OPERATION_MULTIPLY', 'multiply');
define('OPERATION_DIVISION', 'division');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php calculator</title>
</head>

<body>
    <?php
    $parameters = $_GET;

    $operation = $parameters['operation'] ?? null;
    $num1 = $parameters['num1'] ?? null;
    $num2 = $parameters['num2'] ?? null;
    $result = '';

    switch ($operation) {
        case OPERATION_MINUS:
            $result = $num1 - $num2;
            break;
        case  OPERATION_PLUS:
            $result = $num1 + $num2;
            break;
        case OPERATION_MULTIPLY:
            $result = $num1 * $num2;
            break;
        case OPERATION_DIVISION:
            $result = $num1 / $num2;
            break;
        default:
            //throw new Error('Выберите операцию');
    }
    ?>
    <main>
        <form action="">
            <select name="operation" id="">
                <option value="">---</option>
                <option value="plus" <?= $operation == 'plus' ? 'selected' : '' ?>>Сложение</option>
                <option value="minus" <?= $operation == 'minus' ? 'selected' : '' ?>>Вычитание</option>
                <option value="multiply" <?= $operation == 'multiply' ? 'selected' : '' ?>>Умножение</option>
                <option value="division" <?= $operation == 'division' ? 'selected' : '' ?>>Деление</option>
            </select>
            <label for="num1">Введите первое число</label>
            <input type="text" name='num1' id="num1" value="<?= $num1 ?>">
            <label for="num2">Введите второе число</label>
            <input type="text" name='num2' id="num2" value="<?= $num2 ?>">
            <input type="submit" value="Рассчитать">
        </form>
        <h4>Результат: <?= $result ?></h4>
    </main>
</body>

</html>