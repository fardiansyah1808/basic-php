<?php
$name = 'Fardi';
$name = null;
$age = null;

echo "Author: ";
echo $name;
echo "\n";
echo "App Version: ";
echo $age;
echo "\n";

echo "Is name NULL?: ";
echo is_null($name);
echo "\n";
var_dump(is_null($name));
//menghapus variable
unset($age);
echo "\n";
var_dump(isset($age));
