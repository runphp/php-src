--TEST--
Bug #47109 (Memory leak on $a->{"a"."b"} when $a is not an object)
--FILE--
<?php
$a->{"a"."b"};
?>
--EXPECTF--
Warning: Undefined variable $a in %s on line %d

Warning: Trying to get property 'ab' of non-object in %s on line %d
