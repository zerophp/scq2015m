<?php
function Test8_1() {
    global $x;
    #$someClass =& new SomeClass2();

    /* The Test */
    $t = microtime(true);
    while($i < 1000) {
        $tmp[] = '';
        ++$i;
    }

    return (microtime(true) - $t);
}

// Test Source
function Test8_2() {
    global $aHash;
    #$someClass =& new SomeClass2();

    /* The Test */
    $t = microtime(true);
    while($i < 1000) {
        $tmp[] = "";
        ++$i;
    }

    return (microtime(true) - $t);
}


var_dump(Test8_1());
var_dump(Test8_2());


