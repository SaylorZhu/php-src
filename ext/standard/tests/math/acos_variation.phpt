--TEST--
Test variations in usage of acos()
--INI--
precision=10
--FILE--
<?php
/*
 * Function is implemented in ext/standard/math.c
*/


//Test acos with a different input values

$values = array(23,
        -23,
        2.345e1,
        -2.345e1,
        0x17,
        027,
        "23",
        "23.45",
        "2.345e1",
        "1000",
        "1000ABC",
        null,
        true,
        false);

for ($i = 0; $i < count($values); $i++) {
    $res = acos($values[$i]);
    var_dump($res);
}

?>
--EXPECTF--
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)
float(NAN)

Notice: A non well formed numeric value encountered in %s on line %d
float(NAN)
float(1.5707963267948966)
float(0)
float(1.5707963267948966)
