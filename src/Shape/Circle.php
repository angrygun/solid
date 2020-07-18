<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/14 17:21
 */
namespace Solid\Shape;

/**
 * Class Circle
 * @package Solid
 */
class Circle implements ShapeInterface, ManageShapeInterface
{
    public $radius;

    /**
     * Circle constructor.
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
        return pi() * pow($this->radius, 2);
    }

    /**
     * @return float|int
     */
    public function calculate()
    {
        return $this->area();
    }
}