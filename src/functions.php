<?php
function task1 ($stringsArray, $concatenate = false)
{
    if ($concatenate == false) {
        foreach($stringsArray as $key => $value) {
            echo "<p>", $value, "</p>";
        }
    } else {
        echo '<p>';
        foreach($stringsArray as $key => $value) {
            echo $value;
        }
        echo '</p>';
    }
}

function task2 ($string, ...$numbers) {
    $acc = 0;
    switch($string) {
        case '-':
            foreach ($numbers as $n) {
                $acc -= $n;
            }
            break;
        case '*':
            foreach ($numbers as $n) {
                $acc = $n * $acc;
            }
        break;
        case '/':            
            foreach ($numbers as $key => $n) {
                if ($key == 0) {
                    $acc = $n;
                }
                $acc = $n / $acc;
            }
        break;
        default:
            foreach ($numbers as $n) {
                $acc += $n;
            }
        break;
    }
    echo "<p>", $acc, "</p>";
}

function task3($num1, $num2) {
    if (!is_int($num1) || !is_int($num2)) {
        echo "Числа должны быть целыми";
    } else {
        ($num1 * $num2 < 0) ? $sign = '-' : $sign = '';
        $num1 = abs($num1);
        $num2 = abs($num2);
        echo '<table width="500px" border="1px" align="center">';
        for ($i = 1; $i <= $num1; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $num2; $j++) {
                echo '<td align="center">', $sign, $i * $j, '</td>';
            }    
            echo '</tr>';
        }       
        echo '</table>';
    }
}

function task4() {
    echo date('d.m.Y H:i', time());
    echo PHP_EOL;
    echo strtotime('24.02.2016 00:00:00');
}

function task5($string) {
    if (strstr($string, "Карл")) {
        echo str_replace('К', '', $string), PHP_EOL;
    } else {
        echo str_replace('Две', 'Три', $string), PHP_EOL;
    }
}

function task6($string) {
    file_put_contents('test.txt', $string);
    echo file_get_contents('test.txt');
}