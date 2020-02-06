<?php
namespace KimJangwook\DateUtil;

class DateCalculator
{
    /**
     * Return YYYY-MM-DD
     * @param string $dateString
     * @param int $monthAdding
     * @return string YYYY-MM-DD
     */
    public static function addMonth(string $dateString, int $monthAdding)
    {
        $y = date('Y', strtotime($dateString));
        $m = date('m', strtotime($dateString));
        $d = date('d', strtotime($dateString));

        $lastDayOfTheMonth = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        $m += $monthAdding;
        $y += (($m % 12) === 0 ? intval($m / 12) - 1 : intval($m / 12));
        $m = ($m % 12) === 0 ? 12 : ($m % 12);
        $m = substr('00'.$m, -2);

        if (intval($d) === $lastDayOfTheMonth) {
            $d = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        } else if (intval($d) > cal_days_in_month(CAL_GREGORIAN, $m, $y)) {
            $d = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        }
        $d = substr('00'.$d, -2);

        return "$y-$m-$d";
    }
}
