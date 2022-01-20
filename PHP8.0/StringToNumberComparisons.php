<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/20
 * Time: 1:08 AM
 */

namespace PHP8_0\StringToNumberComparisons;

/**
 * 字符串与数字的比较更符合逻辑
 * PHP 8 比较数字字符串（numeric string）时，会按数字进行比较。 不是数字字符串时，将数字转化为字符串，按字符串比较。
 */


//PHP 7 按数字比较 'foobar' 转为 0
//var_dump(0 == 'foobar');  // true;

//PHP 8  'foobar'非数字字符串，按字符串比较，0转化为''
echo "0 == 'foobar'：" . var_export(0 == 'foobar', true); // false;
echo PHP_EOL;

// '0'数字字符串，'0'转为0
echo "0=='0'：" . var_export(0 == '0', true); //true;
echo PHP_EOL;
echo "7=='7'：" . var_export(7 == '7', true);
echo PHP_EOL;
echo "7=='7dd'：" . var_export(7 == '7dd', true);
