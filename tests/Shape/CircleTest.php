<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 22:39
 */
namespace Solid\Tests\Shape;

use PHPUnit\Framework\TestCase;
use Solid\Shape\Circle;

/**
 * Class CircleTCest
 * @package Solid\Tests\Shape
 */
class CircleTCest extends TestCase
{
    public function testArea()
    {
        $circleRight = new Circle(3);
        $this->assertEquals(pi() * pow(3, 2), $circleRight->area());

        $this->expectError();
        $circle = new Circle('aaa');
        $circle->area();
    }

    public function testCalculator()
    {
        $circleRight = new Circle(3);
        $this->assertEquals($circleRight->area(), $circleRight->calculate());

        $this->expectError();
        $circle = new Circle('test');
        $circle->area();
    }

}