<?php

$array = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

$removidos = array_splice($array, 2, 2);

print_r($array);
echo "<br>";

print_r($removidos);
echo "<br>";