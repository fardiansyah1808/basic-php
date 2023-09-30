<?php

$first = [
    "first_name" => "Eko",
    "age" => 24
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy",
    "age" => 24
];
$c = [
    "last_name" => "Khannedy",
    "first_name" => "Eko",
    "age" => "24"
];
$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko",
    "age" => 24
];

var_dump($a == $c);
var_dump($a === $b);
var_dump($c === $b);
