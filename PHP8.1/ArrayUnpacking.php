<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/23
 * Time: 12:04 AM
 */

/**
 * 对字符串键控数组的数组解包支持
 * PHP 7.4.0 开始可以使用 ... 解包 array,在 PHP 8.1 之前，带有 string 键的 array 无法解包
 * ... 操作符解包 array 时也遵守函数 array_merge() 的语义。 也就是说，key 为字符时，后面的字符键会覆盖之前的字符键；key 为 integer 时则会重新编号
 */

$arrayA = ['a' => 1];
$arrayB = ['b' => 2];

$result = ['a' => 0, ...$arrayA, ...$arrayB];
// 或者PHP<8.1时，使用
// $result = array_merge(['a' => 0], $arrayA, $arrayB);

print_r($result);