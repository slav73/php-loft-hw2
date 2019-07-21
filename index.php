<?php
require $_SERVER['DOCUMENT_ROOT']."/hw2/src/functions.php";

$stringsArray = ['One', 'Two', 'Three'];

task1($stringsArray);

task1($stringsArray, true);

task2("+", 1, 2, 3, 5.2);
task2("-", 1, 2, 3, 5.2);
task2("*", 1, 2, 3, 5.2);
task2("/", 1, 2, 3, 5.2);

task3(8, 5);
task3(1.2, 3);