<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/15 14:58
 */
namespace Solid\Calculator;

use Solid\Exception\AreaCalculatorInvalidShapeException;
use Solid\Shape\ManageShapeInterface;

/**
 * Class VolumeCalculator
 * @package Solid
 */
class VolumeCalculator extends AreaCalculator
{
    /**
     * VolumeCalculator constructor.
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        parent::__construct($shapes);
    }

    /**
     * @return float|int
     * @throws AreaCalculatorInvalidShapeException
     */
    public function sum()
    {
        $volume = [];
        foreach ($this->shapes as $shape) {
            if (is_a($shape, ManageShapeInterface::class)) {
                /**
                 * @var ManageShapeInterface $shape
                 */
                $volume[] = $shape->calculate();
                continue;
            }

            throw new AreaCalculatorInvalidShapeException;
        }

        return array_sum($volume);
    }
}