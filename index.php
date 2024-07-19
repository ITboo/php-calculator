<?php
// declare(strict_types=1); строгий режим типизирования

// показывать все ошибки
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);

$operations = ['plus', 'minus', 'division', 'multiple']; //array('plus', 'minus', 'division', 'multiple')
$messageError = 'Введены некорректные данные';

var_dump($operations);
die; // var_dump — Выводит информацию о переменной; die - Эквивалент языковой конструкции exit().

// Принимаем данные либо null
// php переводит незакодированный оператор + в пробел
// (int) - приведение к типу integer
$currentOperator = $_GET('operator') ?? null;
$num1 = (int)$_GET('num1') ?? 0;
$num2 = (int)$_GET('num2') ?? 0;
$result = 0;

// условия
if ($currentOperator === 'plus') {
    $result = $num1 + $num2;
};
if ($currentOperator === 'minus') {
    if ($num1 < $num2) {
        echo $messageError;
        return; // возврат значения
    } else {
        $result = $num1 - $num2;
    }
};
if ($currentOperator === 'division') {
    if ($num2 === 0) {
        echo $messageError;
        return; // возврат значения     
    } else {
        $result = $num1 / $num2;
    }
};
if ($currentOperator === 'multiple') {
    $result = $num1 * $num2;
};

// echo - Выводит одно или несколько выражений без дополнительных символов новой строки или пробелов.
// . - оператор конкатенации
echo 'Результат операции:' . $result;
