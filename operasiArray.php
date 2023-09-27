<?php

$values = array(5, 4, 3, 2, 1.0);
var_dump($values);

$names = ["Fardi", "Yardan", "Hany"];
var_dump($names);

$names[0] = 'Haniyyah';
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = 'Yardan';
var_dump($names);

var_dump(count($names));
