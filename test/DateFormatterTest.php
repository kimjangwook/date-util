<?php
namespace KimJangwook\Test;

use KimJangwook\DateUtil\DateFormatter;
use PHPUnit\Framework\TestCase;

/**
 * Class DateFormatterTest
 * @group DateFormatter
 * @group DateUtil
 */
class DateFormatterTest extends TestCase
{
    public function testStrtotime()
    {
        $this->assertEquals(DateFormatter::strtotime('2020年03月01日 11時30分30秒'), strtotime('2020-03-01 11:30:30'));
        $this->assertEquals(DateFormatter::strtotime('2020年03月01日 11時30分'), strtotime('2020-03-01 11:30'));
        $this->assertEquals(DateFormatter::strtotime('2020年03月01日 11時'), strtotime('2020-03-01 11:00:00'));
        $this->assertEquals(DateFormatter::strtotime('2020年03月01日'), strtotime('2020-03-01'));
    }

    public function testDayOfWeek()
    {
        $this->assertEquals(DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_KR), ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일'][date('w', strtotime('2020-01-01'))]);
        $this->assertEquals(DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_JP), ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'][date('w', strtotime('2020-01-01'))]);
        $this->assertEquals(DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_CN), ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'][date('w', strtotime('2020-01-01'))]);
    }
}
