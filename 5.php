<?php

    function fibonacci($number)
    {
        if ($number == 0) {
            return 0;
        } else if ($number == 1) {
            return 1;
        } else {
            return (fibonacci($number - 1) + fibonacci($number - 2));
        }
    }

    $row = 4;
    $column = 3;
    $number = 0;

    for ($i = 0; $i < $column; $i++) {
        for ($j = 0; $j < $row; $j++) {
            echo fibonacci($number), ", ";
            $number++;
        }
        echo "<br>";
    }
