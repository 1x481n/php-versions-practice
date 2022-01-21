<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/21
 * Time: 4:10 PM
 */

/**
 * Final 类常量
 * 可以声明 final 类常量，以禁止它们在子类中被重写。
 */
class Foo
{
    public const XX = "foo";

    final public const XXX = 'final_foo';
}

class Bar extends Foo
{
    public const XX = "bar"; // No error

    //public const XXX = 'bar'; // Fatal error: Cannot use 'final' as constant modifier in ...
}

echo Foo::XX;

echo PHP_EOL;

echo Bar::XX;

echo PHP_EOL;

echo Foo::XXX;