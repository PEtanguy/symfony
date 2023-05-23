--TEST--
Test dd() with multiple args shows line number
--FILE--
<?php

$vendor = __DIR__;
while (!file_exists($vendor.'/vendor')) {
    $vendor = \dirname($vendor);
}
require $vendor.'/vendor/autoload.php';

dd(null, 1, 'foo');

--EXPECT--
1 null
2 1
3 "foo"
