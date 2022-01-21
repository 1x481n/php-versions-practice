<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/21
 * Time: 2:40 PM
 */

namespace PHP8_1\NoreturnType;

/**
 * Never 返回类型
 *
 * 使用 never 类型声明的函数或方法表示它不会返回值，并且会抛出异常或通过调用 die()、exit()、trigger_error() 或类似的东西来结束脚本的执行。
 */

function foo(): void
{
    echo 'foo';
}

function bar(): never
{
    echo 'bar';
    exit;  // never 必须要执行
}

foo();
echo PHP_EOL;
bar();
echo '不可达到';

