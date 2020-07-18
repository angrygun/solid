<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 18:48
 */
namespace Solid\Tests\Output;

use PHPUnit\Framework\TestCase;
use Solid\Calculator\AreaCalculator;
use Solid\Output\SumCalculatorOutputter;
use Solid\Shape\Circle;
use Solid\Shape\Square;

/**
 * Class SumCalculatorOutputterTest
 * @package Solid\Tests\Output
 */
class SumCalculatorOutputterTest extends TestCase
{
    public function testJson()
    {
        $shape = [
            new Circle(4),
            new Square(5)
        ];
        $output = new SumCalculatorOutputter(new AreaCalculator($shape));

        $this->assertJson($output->json());
    }

    public function testHtml()
    {
        $shape = [
            new Circle(4),
            new Square(5)
        ];
        $output = new SumCalculatorOutputter(new AreaCalculator($shape));

        $this->assertIsString($output->HTML());
    }
}