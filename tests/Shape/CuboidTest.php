<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/7/18 22:39
 */

namespace Solid\Tests\Shape;

use PHPUnit\Framework\TestCase;
use Solid\Shape\Cuboid;

/**
 * Class CuboidTest
 * @package Solid\Tests\Shape
 */
class CuboidTest extends TestCase
{
    public function testArea()
    {
        $cuboidRight = new Cuboid(3, 4, 5);
        $this->assertEquals(2 * (3 * 4 + 4 * 5 + 3 * 5), $cuboidRight->area());

        $this->expectError();
        $cuboid = new Cuboid('aaa', 'bbb', 'ccc');
        $cuboid->area();
    }

    public function testVolume()
    {
        $cuboidRight = new Cuboid(6, 7, 8);
        $this->assertEquals(6 * 7 * 8, $cuboidRight->volume());

        $this->expectError();

        $this->expectError();
        $cuboid = new Cuboid('ddd', null, 'ccc');
        $cuboid->volume();
    }

    public function testCalculate()
    {
        $cuboidRight = new Cuboid(6, 7, 8);
        $this->assertEquals($cuboidRight->area() + $cuboidRight->volume(),
            $cuboidRight->calculate());

        $this->expectError();

        $this->expectError();
        $cuboid = new Cuboid('ddd', null, 'ccc');
        $cuboid->calculate();
    }

}