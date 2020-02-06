## KimJangwook\DateUtil\DateCalculator

```php
use KimJangwook\DateUtil\DateCalculator;

// public static function addMonth(string $dateString, int $monthAdding)
echo DateCalculator::addMonth('2020-02-29', 1); // 2020-03-31
echo DateCalculator::addMonth('2020-02-29', 2); // 2020-04-30
echo DateCalculator::addMonth('2020-02-29', 3); // 2020-05-31
echo DateCalculator::addMonth('2020-01-30', 1); // 2020-02-29
```

## KimJangwook\DateUtil\DateFormatter

```php
use KimJangwook\DateUtil\DateFormatter;

// public static function strtotime(string $dateString)
echo DateFormatter::strtotime('2020年03月01日 11時30分30秒'); // === strtotime('2020-03-01 11:30:30')
echo DateFormatter::strtotime('2020年03月01日 11時30分'); // === strtotime('2020-03-01 11:30')
echo DateFormatter::strtotime('2020年03月01日 11時'); // === strtotime('2020-03-01 11:00:00')
echo DateFormatter::strtotime('2020年03月01日'); // === strtotime('2020-03-01')

// public static function dayOfWeek(string $dateString, int $type)
echo DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_KR); // 수요일
echo DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_JP); // 水曜日
echo DateFormatter::dayOfWeek('2020-01-01', DateFormatter::TYPE_CN); // 星期三
```