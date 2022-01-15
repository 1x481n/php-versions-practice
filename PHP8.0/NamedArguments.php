<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/15
 * Time: 9:38 PM
 */

namespace PHP8_0\NamedArguments;

/**
 * 命名参数
 * 仅仅指定必填参数，跳过可选参数。
 * 参数的顺序无关、自己就是文档（self-documented）
 */

function foo($a, $b, $c = null, $d, $e = null)
{
    var_dump($a, $b, $c, $d, $e);
}

foo('a1', 'b1', 'c1', 'd1', 'e1'); //按顺序传入全部参数
echo PHP_EOL;
foo('a2', 'b2', 'c2', 'd2'); // 按顺序传入参数，必填参数在默认参数后，未使用命名参数，不能跳过
echo PHP_EOL;
foo(a: 'a3', b: 'b3', d: 'd3'); // 仅指定必填参数，跳过可选参数
echo PHP_EOL;
foo('a3', 'b3', d:'d3'); // 默认顺序+指定在默认参数后的必填参数
echo PHP_EOL;
foo(b: 'b5', d: 'd5', a: 'a5'); // 不推荐使用，不按顺序指定
echo PHP_EOL;
//foo(d:'d6','b6',a:'a6'); // 错误:不能在命名实参后面使用位置实参

