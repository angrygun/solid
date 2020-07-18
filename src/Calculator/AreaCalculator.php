<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/14 17:26
 */
namespace Solid\Calculator;

use Solid\Exception\AreaCalculatorInvalidShapeException;
use Solid\Shape\ManageShapeInterface;

/**
 * Class AreaCalculator
 * @package Solid
 */
class AreaCalculator implements Calculator
{
    protected $shapes;

    /**
     * AreaCalculator constructor.
     * @param $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    /**
     * @return float|int
     * @throws AreaCalculatorInvalidShapeException
     */
    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if (is_a($shape, ManageShapeInterface::class)) {
                /**
                 * @var ManageShapeInterface $shape
                 */
                $area[] = $shape->calculate();
                continue;
            }

            throw new AreaCalculatorInvalidShapeException;
        }

        return array_sum($area);
    }
}