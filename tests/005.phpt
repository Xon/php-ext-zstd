--TEST--
zstd_uncompress(): error conditions
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '8.0', '>=')) die('skip PHP is too old');
--FILE--
<?php

echo "*** Testing zstd_uncompress() function with Zero arguments ***", PHP_EOL;
var_dump( zstd_uncompress() );

echo "*** Testing with incorrect arguments ***", PHP_EOL;
var_dump(zstd_uncompress(123));

class Tester
{}

$testclass = new Tester();
var_dump(zstd_uncompress($testclass));
?>
===DONE===
--EXPECTF--
*** Testing zstd_uncompress() function with Zero arguments ***

Warning: zstd_uncompress() expects exactly 1 parameter, 0 given in %s on line %d
bool(false)
*** Testing with incorrect arguments ***

Warning: zstd_uncompress: expects parameter to be string. in %s on line %d
bool(false)

Warning: zstd_uncompress: expects parameter to be string. in %s on line %d
bool(false)
===DONE===
