<?php

    function sentencesCheck($dSentences)
    {
        // Sentences count
        $count = 0;
        $tempChar = $dSentences;
        strtolower($tempChar);
        $tempChar = str_split($tempChar, 1);

        foreach ($tempChar as $char) {
            if ($char == 'a' or $char == 'i' or $char == 'u' or $char == 'e' or $char == 'o') {
                $count++;
            }
        }

        echo "Count $dSentences = $count";
    }

    $sentences = 'programmer';

    sentencesCheck($sentences);
