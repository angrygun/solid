<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/15 15:45
 */
namespace Solid\Shape;

/**
 * Class Sphere
 * @package Solid
 */
class Sphere implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
{
    public $radius;

    /**
     * Sphere constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return 4 * pi() * pow($this->radius, 2);
    }

    /**
     * @return float|int
     */
    public function volume()
    {
        return 4 * pi() * pow($this->radius, 3) / 3;
    }

    /**
     * @return float|int
     */
    public function calculate()
    {
        return $this->area() + $this->volume();
    }
}