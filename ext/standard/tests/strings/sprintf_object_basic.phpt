--TEST--
Test sprintf() function : basic functionality - printing an object
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
*/

echo "*** Testing sprintf() : basic functionality - printing and object ***\n";

// Initialise all required variables
$format = "format\n";
$format1 = "%v\n";

// Calling sprintf() with default arguments
echo sprintf($format);

// Calling sprintf() with two arguments
echo( sprintf($format1, new class(10) {
    public function __construct(int $num){
        $this->num = $num;
    }
}) );

echo sprintf('%v', 'Done');

?>
--EXPECT--
*** Testing sprintf() : basic functionality - printing and object ***
format
class@anonymous Object
(
    [num] => 10
)

Done
