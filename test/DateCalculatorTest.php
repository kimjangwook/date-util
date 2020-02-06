<?php
namespace KimJangwook\Test;

use KimJangwook\DateUtil\DateCalculator;
use PHPUnit\Framework\TestCase;

/**
 * Class DateCalculatorTest
 * @group DateCalculator
 * @group DateUtil
 */
class DateCalculatorTest extends TestCase
{
    public function testAddMonth()
    {
        $date = '2020-02-29';
        $oneMonthLater = DateCalculator::addMonth($date, 1);
        $this->assertEquals($oneMonthLater, '2020-03-31');
        $twoMonthLater = DateCalculator::addMonth($date, 2);
        $this->assertEquals($twoMonthLater, '2020-04-30');
        $threeMonthLater = DateCalculator::addMonth($date, 3);
        $this->assertEquals($threeMonthLater, '2020-05-31');

        $date = '2020-01-30';
        $oneMonthLater = DateCalculator::addMonth($date, 1);
        $this->assertEquals($oneMonthLater, '2020-02-29');
        $oneMonthLater = DateCalculator::addMonth($date, 2);
        $this->assertEquals($oneMonthLater, '2020-03-30');
    }
}
