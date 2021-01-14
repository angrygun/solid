<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/14 17:42
 */
require('./autoload.php'); // spl_autoload_register
//require('./vendor/autoload.php'); // composer autoload

$shapes = [
    new Solid\Shape\Circle(2),
    new Solid\Shape\Square(5),
    new Solid\Shape\Square(6)
];

$areas = new Solid\Calculator\AreaCalculator($shapes);
$outputs = new Solid\Output\SumCalculatorOutputter($areas);

echo $outputs->JSON() . PHP_EOL;

$volume = [
    new Solid\Shape\Cuboid(3, 4, 5),
    new Solid\Shape\Sphere(4),
    new Solid\Shape\Cuboid(5, 6, 7)
];

$solidShape = new Solid\Calculator\VolumeCalculator($volume);
$outputs1 = new Solid\Output\SumCalculatorOutputter($solidShape);

echo $outputs1->HTML(). PHP_EOL;
