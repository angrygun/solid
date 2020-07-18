<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/15 15:05
 */

namespace Solid\Shape;

/**
 * Class Cuboid
 * @package Solid
 */
class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
{
    public $length;
    public $width;
    public $height;

    /**
     * Cuboid constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width  = $width;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return 2 * ($this->length * $this->width + $this->length * $this->height
                + $this->width * $this->height);
    }

    /**
     * @return float|int
     */
    public function volume()
    {
        return $this->length * $this->width * $this->height;
    }

    /**
     * @return float|int
     */
    public function calculate()
    {
        return $this->area() + $this->volume();
    }
}