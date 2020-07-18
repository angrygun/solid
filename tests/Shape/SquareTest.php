<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 22:39
 */
namespace Solid\Tests\Shape;

use PHPUnit\Framework\TestCase;
use Solid\Shape\Square;

/**
 * Class SquareTest
 * @package Solid\Tests\Shape
 */
class SquareTest extends TestCase
{
    public function testArea()
    {
        $squareRight = new Square(5);
        $this->assertEquals(5 * 5, $squareRight->area());

        $this->expectError();
        $square = new Square('aaa');
        $square->area();
    }

    public function testCalculator()
    {
        $squareRight = new Square(3);
        $this->assertEquals($squareRight->area(), $squareRight->calculate());

        $this->expectError();
        $square = new Square('test');
        $square->area();
    }

}