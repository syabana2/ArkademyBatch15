<?php

    function replaceChar($dSentences, $dSchar, $dRchar)
    {
        // Sentences count
        $tempChar = '';
        $dSentences = str_split($dSentences, 1);

        foreach ($dSentences as $char) {
            if ($char == $dSchar) {
                $char = $dRchar;
            }
            $tempChar .= $char;
        }

        echo "Result : $tempChar";
    }

    $sentences = 'Tabun';
    $schar = 'a';
    $rchar = 'u';

    replaceChar($sentences, $schar, $rchar);
