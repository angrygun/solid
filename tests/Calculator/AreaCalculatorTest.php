<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 17:34
 */
namespace Solid\Tests\Calculator;

use PHPUnit\Framework\TestCase;
use Solid\Calculator\AreaCalculator;
use Solid\Exception\AreaCalculatorInvalidShapeException;
use Solid\Shape\Circle;
use Solid\Shape\Square;

/**
 * Class AreaCalculatorTest
 * @package Solid\Tests
 */
class AreaCalculatorTest extends TestCase
{
    public function testSum()
    {
        $shape = [
            new Circle(2),
            new Square(4),
        ];
        $areaCalculator = new AreaCalculator($shape);
        $result = pi() * pow(2, 2) + 4 * 4;
        $this->assertEquals($result, $areaCalculator->sum());
    }

    public function testSumException()
    {
        $this->expectException(AreaCalculatorInvalidShapeException::class);
        $failShape = [
            1,
            2
        ];

        $failAreaCalculator = new AreaCalculator($failShape);
        $failAreaCalculator->sum();
    }
}