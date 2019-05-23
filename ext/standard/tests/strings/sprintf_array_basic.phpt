--TEST--
Test sprintf() function : basic functionality - printing an array
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
*/

echo "*** Testing sprintf() : basic functionality - printing and array ***\n";

// Initialise all required variables
$format = "format\n";
$format1 = "This is an array -->%v\n";

// Calling sprintf() with default arguments
echo sprintf($format);

// Calling sprintf() with two arguments
echo( sprintf($format1, range(0, 3)) );

printf('%v', "Done");
?>
--EXPECT--
*** Testing sprintf() : basic functionality - printing and array ***
format
This is an array -->Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
)

Done
