<?php
/**
 * Created by PhpStorm.
 * Author: Angry Gun.
 * Date: 2020/5/14 17:31
 */
namespace Solid\Output;

use Solid\Calculator\AreaCalculator;
use Solid\Calculator\Calculator;
use Solid\Exception\AreaCalculatorInvalidShapeException;

/**
 * Class SumCalculatorOutputter
 * @package Solid
 */
class SumCalculatorOutputter
{
    public $calculator;

    /**
     * SumCalculatorOutput constructor.
     * @param Calculator $areaCalculator
     */
    public function __construct(Calculator $areaCalculator)
    {
        $this->calculator = $areaCalculator;
    }

    /**
     * @return false|string
     */
    public function JSON()
    {
        $data = [
            'sum' => $this->calculator->sum()
        ];

        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @return string
     */
    public function HTML()
    {
        return implode('', [
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            ''
        ]);
    }
}