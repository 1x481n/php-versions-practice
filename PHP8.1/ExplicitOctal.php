<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/22
 * Time: 11:33 PM
 */

/**
 * 显式八进制数字表示法
 * 现在可以使用显式 0o 前缀表示八进制数。
 * JavaScript/Python：八进制数值的前缀可以为0 0o 0O三种皆可。
 * Java/C：八进制数值只能用一种前缀0，不能用0o 0O
 */

var_dump(0b100); //二进制

var_dump(016); //八进制  < PHP8.1
var_dump(0o16); // 新的八进制显示法  >= PHP8.1
var_dump(0O16);

var_dump(0x1A); // 十六进制
var_dump(0X1A);

