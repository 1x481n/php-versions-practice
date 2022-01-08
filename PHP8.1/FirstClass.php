<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/8
 * Time: 6:17 下午
 */

namespace PHP8_1\FirstClass;

use Closure;

/**
 * First-class 可调用语法
 * 创建闭包新语法糖
 */
class FirstClass
{
    public function __construct()
    {

    }

    public function myCallable(): array
    {
        return ['myCallable1', 'myCallable2'];
    }

    public function test()
    {
        $isNumericClosure = is_numeric(...); //等价 $isNumericClosure=Closure::fromCallable('is_numeric');
        var_dump($isNumericClosure(3));
    }

    public function test1()
    {
        $myCallableClosure = $this->myCallable(...);
        // 等价
        //$myCallableClosure=Closure::fromCallable([$this, 'myCallable']);
        // 等价(当前类型不同，使用回调时) // 一个已实例化的 object 的方法被作为 array 传递，下标 0 包含该 object，下标 1 包含方法名(https://www.php.net/manual/zh/language.types.callable.php)
        //$myCallableClosure= [$this,'myCallable'];
        //var_dump($myCallableClosure);

        return var_dump($myCallableClosure());
    }

    public function test2(callable $fn)
    {
        var_dump($fn());
    }
}

$firstClass = new FirstClass();

$firstClass->test();

$firstClass->test1();

$firstClass->test2([new Foo(), 'func']);

$firstClass->test2('PHP8_1\FirstClass\func2');


class Foo
{
    function func()
    {
        return 'func111';
    }
}

function func2()
{
    return 'func222';
}

;


