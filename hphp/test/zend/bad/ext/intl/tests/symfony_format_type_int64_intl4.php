<?php


// PHP Unit's code to unserialize data passed as args to #testFormatTypeInt64Intl
$unit_test_args = unserialize('a:3:{i:0;O:15:"NumberFormatter":0:{}i:1;d:-2147483649;i:2;s:14:"-2,147,483,649";}');

var_dump($unit_test_args);

// execute the code from #testFormatTypeInt64Intl
$unit_test_args[0]->format($unit_test_args[1], \NumberFormatter::TYPE_INT64);

echo "== didn't crash ==".PHP_EOL;

?>