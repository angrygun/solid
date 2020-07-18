<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 22:39
 */

namespace Solid\Tests\Shape;

use PHPUnit\Framework\TestCase;
use Solid\Shape\Sphere;

/**
 * Class SphereTest
 * @package Solid\Tests\Shape
 */
class SphereTest extends TestCase
{
    public function testArea()
    {
        $sphereRight = new Sphere(3);
        $this->assertEquals(4 * pi() * pow(3, 2), $sphereRight->area());

        $this->expectError();
        $sphere = new Sphere('aaa');
        $sphere->area();
    }

    public function testVolume()
    {
        $sphereRight = new Sphere(6);
        $this->assertEquals(4 * pi() * pow(6, 3) / 3, $sphereRight->volume());

        $this->expectError();

        $this->expectError();
        $sphere = new Sphere('ccc');
        $sphere->volume();
    }

    public function testCalculate()
    {
        $sphereRight = new Sphere(6);
        $this->assertEquals($sphereRight->area() + $sphereRight->volume(),
            $sphereRight->calculate());

        $this->expectError();

        $this->expectError();
        $sphere = new Sphere('ddd');
        $sphere->calculate();
    }

}