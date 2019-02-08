<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Form\Extension\Core\DataTransformer\MoneyToLocalizedStringTransformer;

$transformer = new MoneyToLocalizedStringTransformer(null, null, null, 2);

setlocale(LC_ALL, "en_US.UTF-8");
$value = 12 / 34;
var_dump($value);
var_dump($transformer->transform($value));

setlocale(LC_ALL, "de_DE.UTF-8");
$value = 12 / 34;
var_dump($value);
var_dump($transformer->transform($value));
