<?php
namespace KimJangwook\DateUtil;

class DateFormatter
{
    const TYPE_KR = 0;
    const TYPE_JP = 1;
    const TYPE_CN = 2;

    public static function strtotime($time = null, $blnNow = true)
    {
        if(preg_match('/^([0-9]{4})[年|년]{1}([0-9]{1,2})[月|월]{1}([0-9]{1,2})[日|일]{1}[\s　]([0-9]{1,2})[時|시]{1}([0-9]{1,2})[分|분]{1}([0-9]{1,2})[秒|초]{1}[\s　]*$/u', $time, $match)){
            // YYYY年|년MM月|월DD日|일HH時|시MI分|분SS秒|초
            $timestamp = mktime($match[4], $match[5], $match[6], $match[2], $match[3], $match[1]);
        } else if(preg_match('/^([0-9]{4})[年|년]([0-9]{1,2})[月|월]([0-9]{1,2})[日|일][\s　]([0-9]{1,2})[時|시]([0-9]{1,2})[分|분][\s　]*$/u', $time, $match)){
            // YYYY年|년MM月|월DD日|일HH時|시MI分|분
            $timestamp = mktime($match[4], $match[5], 0, $match[2], $match[3], $match[1]);
        } else if(preg_match('/^([0-9]{4})[年|년]([0-9]{1,2})[月|월]([0-9]{1,2})[日|일][\s　]([0-9]{1,2})[時|시][\s　]*$/u', $time, $match)){
            // YYYY年|년MM月|월DD日|일HH時|시
            $timestamp = mktime($match[4], 0, 0, $match[2], $match[3], $match[1]);
        } else if(preg_match('/^([0-9]{4})[年|년]([0-9]{1,2})[月|월]([0-9]{1,2})[日|일][\s　]*$/u', $time, $match)){
            // YYYY年|년MM月|월DD日|일
            $timestamp = mktime(0, 0, 0, $match[2], $match[3], $match[1]);
        } else {
            // 通常
            $timestamp = strtotime($time, $blnNow);
        }
        return $timestamp;
    }


    public static function dayOfWeek($date, $type = self::TYPE_KR) {
        $dow = [
            self::TYPE_KR => ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'],
            self::TYPE_JP => ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
            self::TYPE_CN => ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
        ];
        return $dow[$type][date('w', strtotime($date))];
    }
}
