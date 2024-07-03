<?php

require_once __DIR__ . '/vendor/autoload.php';

use TheArKaID\SimpleNameGenerator;

$example = new SimpleNameGenerator();
echo "Given Name: " . $example->generateGivenName() . "\n";
echo "Surname: " . $example->generateSurname() . "\n";
echo "Full Name: " . $example->generateFullName() . "\n";
echo "Custom Length Given Name (6): " . $example->generateGivenName(6) . "\n";
echo "Custom Length Surname (7): " . $example->generateSurname(7) . "\n";
echo "Custom Length Full Name (8, 9): " . $example->generateFullName(8, 9) . "\n";