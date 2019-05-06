<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-16
 * Time: 13:46
 */

$coll = new Collator('zh');
$al   = $coll->getLocale(Locale::ACTUAL_LOCALE);
echo "Actual locale: $al\n";

$formatter = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
echo $formatter->format(1234567);