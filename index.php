<?php
//require $_SERVER['DOCUMENT_ROOT']."/hw2/src/functions.php";
require ('src/functions.php');

$stringsArray = ['One', 'Two', 'Three'];

task1($stringsArray);
echo PHP_EOL;
task1($stringsArray, true);
echo PHP_EOL;

task2("+", 1, 2, 3, 5.2);
echo PHP_EOL;
task2("-", 1, 2, 3, 5.2);
echo PHP_EOL;
task2("*", 1, 2, 3, 5.2);
echo PHP_EOL;
task2("/", 1, 2, 3, 5.2);
echo PHP_EOL;
task2('/', 8, 4);
echo PHP_EOL;

task3(8, 5);
echo PHP_EOL;
task3(1.2, 3);
echo PHP_EOL;
task3(-3, -3);
echo PHP_EOL;

task4();
echo PHP_EOL;

task5('Карл бутылки лимонада');
echo PHP_EOL;

task6('Hello again!');
echo PHP_EOL;