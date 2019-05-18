<?php

function titleToNumber($str) {
    $result = 0;

    for ($i=0; $i < strlen($str); $i++) {
        $result *= 26;
        $char =ord($str[$i]);
        $char2 = ord('A');
        //echo $char2;
        $result += $char - $char2 + 1;
    }

    echo $result . "\n";
}

titleToNumber('B');
titleToNumber('Z');
titleToNumber('AB');
titleToNumber('CDA');
