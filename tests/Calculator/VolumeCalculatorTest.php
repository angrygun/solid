<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 18:36
 */

namespace Solid\Tests\Calculator;

use PHPUnit\Framework\TestCase;
use Solid\Calculator\VolumeCalculator;
use Solid\Exception\AreaCalculatorInvalidShapeException;
use Solid\Shape\Cuboid;
use Solid\Shape\Sphere;

/**
 * Class VolumeCalculatorTest
 * @package Solid\Tests\Calculator
 */
class VolumeCalculatorTest extends TestCase
{
    public function testSum()
    {
        $shape            = [
            new Cuboid(2, 3, 4),
            new Sphere(4),
        ];
        $volumeCalculator = new VolumeCalculator($shape);
        $areaSum          = 2 * (2 * 3 + 3 * 4 + 2 * 4) + 4 * pi() * pow(4, 2);
        $volumeSum        = 2 * 3 * 4 + 4 * pi() * pow(4, 3) / 3;
        $this->assertEquals($areaSum + $volumeSum, $volumeCalculator->sum());
    }

    public function testSumException()
    {
        $this->expectException(AreaCalculatorInvalidShapeException::class);
        $failShape = [
            1,
            2,
        ];

        $failAreaCalculator = new VolumeCalculator($failShape);
        $failAreaCalculator->sum();
    }
}