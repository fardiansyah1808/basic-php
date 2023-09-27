<?php

$hany = array(
    'id' => 'Hany.lf',
    'nama' => 'Haniyya',
    'age' => 27,
    'address' => array(
        'city' => 'Jakarta',
        'country' => 'Indonesia',
    )
);
var_dump($hany);
var_dump($hany['age']);
var_dump($hany['address']['city']);

$yardan = [
    'id' => 'Ayang',
    'nama' => 'Yardan',
    'age' => 1,
    'address' => array(
        'city' => 'Jakarta',
        'country' => 'Indonesia',
    )
];
var_dump($yardan['id']);
var_dump($yardan['address']['country']);
