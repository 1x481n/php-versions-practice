<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/20
 * Time: 1:25 PM
 */
//declare(strict_types=1);

namespace PHP8_0\ConsistentTypeErrors;

/**
 * 内部函数类型错误的一致性。
 * 现在大多数内部函数在参数验证失败时抛出 Error 级异常。
 * PHP8以前只有自定义函数会使用 Error异常，内部函数使用警告 并返回null
 */

// PHP 7
$a=strlen([]); // Warning: strlen() expects parameter 1 to be string, array given in ...  ｜ 如果使用严格模式 declare(strict_types=1);  Fatal error: Uncaught TypeError: strlen() expects parameter 1 to be string, array given in ... 并终止程序运行
var_dump($a); // NULL
$b=array_chunk([], -1); // Warning: array_chunk(): Size parameter expected to be greater than 0 in ...  |  return Null
var_dump($b); // NULL
//
// PHP 8
$a=strlen([]); // TypeError: strlen(): Argument #1 ($string) must be of type string, array given in ... ｜ 报错终止程序
var_dump($a);  // 上面报错，不会执行
array_chunk([], -1); // ValueError: array_chunk(): Argument #2 ($length) must be greater than 0 in ...