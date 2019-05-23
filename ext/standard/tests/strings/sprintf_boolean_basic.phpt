--TEST--
Test sprintf() function : basic functionality - printing an array
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
*/

echo "*** Testing sprintf() : basic functionality - printing and array ***\n";

echo sprintf("This is a boolean -->%v\n", true);
echo sprintf("This is also a boolean -->%v\n", false);

echo sprintf('%v', "Done");
?>
--EXPECT--
*** Testing sprintf() : basic functionality - printing and array ***
This is a boolean -->true
This is also a boolean -->false
Done