<?php

    echo "Парні числа від 1 до 100:\n";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
    }

    $numbers = [1, 23, 44, 88, 13, 11, 7, 8];
    echo "Парні числа з масиву:\n";
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo $number . "\n";
        }
    }

