<?php
function task1 ($stringsArray, $concatenate = false)
{
    if ($concatenate == false) {
        foreach($stringsArray as $key => $value) {
            echo "<p>", $value, "</p>";
        }
    } else {
        $concatenatedString = implode(' ', $stringsArray);
        echo "<p>", $concatenatedString, "</p>";
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
        $acc = 1;
        foreach ($numbers as $n) {
            $acc *= $n;
        }
        break;
        case '/':
        $acc = 1;
        foreach ($numbers as $n) {
            $acc /= $n;
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
        echo '<table width="500px" border="1px" align="center">';
        for ($i = 1; $i <= $num1; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $num2; $j++) {
                echo '<td align="center">', $i * $j, '</td>';
            }    
            echo '</tr>';
        }
        
        echo '</table>';
    }
}