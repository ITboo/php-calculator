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

// условия
// match в отличие от switch использует строгое равенство ===
$result = match ($currentOperator) {
    'plus' => $num1 + $num2,
    'minus' => $num1 - $num2,
    'division' => $num1 / $num2,
    'multiple' => $num1 * $num2,
    default => 0
};

// echo - Выводит одно или несколько выражений без дополнительных символов новой строки или пробелов.
// . - оператор конкатенации
echo 'Результат операции:' . $result;


//localhost = 127.0.0.1
// netstat -ntulp | grep 8080 (netstat -утилита, позволяет посмотреть какая программа занимает определённый порт, grep для фильтрации)

// http - :80
// https - :443

// перед тем как запрос прилетит в скрипт php под капотом проводит ряд операций. Заполняет массив $_GET, $_POST, $_COOKIE, $_FILES (если были загружены файлы), $_SERVER (окружение,в  котором был запущен скрипт)

// include __DIR__ . '/filename.php' __DIR__ константа текущей директории include при ошибке не блочит выполнение скрипта, а просто выдаёт предупреждение (в отличие от require)

$path_url = $_SERVER['PATH_INFO'] ?? null;
switch ($path_url){
case '/calculator':
    require './calculator.php';
    break;
}