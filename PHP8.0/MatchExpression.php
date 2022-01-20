<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/19
 * Time: 1:11 AM
 */

namespace PHP8_0\MatchExpression;

/**
 * 新的 match 类似于 switch，并具有以下功能：
 * Match 是一个表达式，它可以储存到变量中亦可以直接返回。
 * Match 分支仅支持单行，它不需要一个 break; 语句。
 * Match 使用严格比较。
 */

// PHP 7
switch (8.0) {
    case '8.0':
        $result = "Oh no!";
        break;
    case 8.0:
        $result = "This is what I expected";
        break;
}
echo $result;
//> Oh no!

echo PHP_EOL;

// PHP 8
echo match (8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",
};
//> This is what I expected