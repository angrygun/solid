<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/14 17:24
 */
namespace Solid\Shape;

/**
 * Class Square
 * @package Solid
 */
class Square implements ShapeInterface, ManageShapeInterface
{
    public $length;

    /**
     * Square constructor.
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return pow($this->length, 2);
    }

    /**
     * @return float|int
     */
    public function calculate()
    {
        return $this->area();
    }
}