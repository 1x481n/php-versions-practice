<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/20
 * Time: 5:54 PM
 */

/**
 * 纯交集类
 * 当一个值需要同时满足多个类型约束时，使用交集类型。
 * 注意，目前无法将交集和联合类型混合在一起，例如 A&B|C。
 *
 * 交集类型与联合类型的区别：联合类型要求输入是给定类型之一，交集类型要求输入是所有指定类型。
 * 交集类型仅支持类类型（接口和类名）。使用它们的标准类型，会导致永远无法满足的类型（例如 int&string）。
 */


interface A {}
interface B {}
interface AB extends A, B {}

class Test implements A, B {}

function foo(AB $v) {

    echo 'foo(AB $v)';

    echo PHP_EOL;

    var_dump($v);

    if($v instanceof AB){
        echo '$v instanceof AB';
    }
    echo PHP_EOL;
    if($v instanceof A){
        echo '$v instanceof A';
    }
    echo PHP_EOL;
    if($v instanceof B){
        echo '$v instanceof B';
    }
}

//foo(new Test());  //error  Fatal error: Uncaught TypeError: foo(): Argument #1 ($v) must be of type AB, Test given, called in

class Test2 implements AB{};

foo(new Test2());

echo PHP_EOL;
echo '--------------------------------------';
echo PHP_EOL;

function foo2(A&B $v) {
    echo 'foo2(A&B $v)';
    echo PHP_EOL;
    var_dump($v);
    echo PHP_EOL;
    if($v instanceof A){
        echo '$v instanceof A';
    }
    echo PHP_EOL;
    if($v instanceof B){
        echo '$v instanceof B';
    }
}

foo2(new Test());


class C {}
class D extends C {}

class Foo {
    public C&D $prop;
}
class Bar extends Foo {
    public D $prop;
}



