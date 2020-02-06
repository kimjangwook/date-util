## KimJangwook\DateUtil\DateCalculator

```php
use KimJangwook\DateUtil\DateCalculator;

$date = '2020-02-29';
echo DateCalculator::addMonth($date, 1); // 2020-03-31
echo DateCalculator::addMonth($date, 2); // 2020-04-30
echo DateCalculator::addMonth($date, 3); // 2020-05-31

$date = '2020-01-30';
echo DateCalculator::addMonth($date, 1); // 2020-02-29
```