<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/26
 * Time: 12:53 AM
 */

/**
 * 生成器
 * 支持使用yield语法返回返回生成器对象，不能手动实例化Generator对象。
 */

// new Generator(); //error

function gen()
{
    echo 'start' . PHP_EOL;
    try {
        $i = 0;
        while (true) {
            //$receive = (yield "gen" . PHP_EOL);
            $receive = (yield $i++ => "gen" . PHP_EOL);
            //echo 'inner step:' . $i . PHP_EOL;
            //$i++;
            if ($receive) {
                echo 'input:' . $i . '-' . $receive . PHP_EOL;
                if ($receive == 'should end') {
                    break;
                }
            }
        }
    } catch (\Exception $e) {
        echo "Exception: {$e->getMessage()}\n";
    }
    echo 'end' . PHP_EOL;
}


$gen = gen();
var_dump($gen);
var_dump($gen instanceof Generator);
var_dump($gen instanceof Iterator);


echo 'output:' . "{$gen->key()} - {$gen->current()}";
$gen->next();
echo 'output:' . "{$gen->key()} - {$gen->current()}";

$gen->send('hhhh');
$gen->next();
echo 'output:' . "{$gen->key()} - {$gen->current()}";


//$gen->throw(new \Exception('Test'));


// Throws an exception if the generator is currently after the first yield.
//$gen->rewind();

// $gen-next()之后，不可再使用foreach(会隐式调用$gen->rewind())
// Throws an exception if the generator is currently after the first yield.
//foreach ($gen as $k => $v) {
//
//    if ($k == 10) {
//        break;
//    }
//    echo "{$k} - {$v}";
//}

var_export(['valid:' => $gen->valid()]);

echo PHP_EOL;
echo '-----------------------';
echo PHP_EOL;

while (true) {
    $gen->next();
    if ($gen->key() > 9) {
        //$gen->send('should end');
        //var_export(['valid:' => $gen->valid()]);
        break;
    }
    echo "{$gen->key()} - {$gen->current()}";
}
echo PHP_EOL;
echo '-----------------------';
echo PHP_EOL;

do {
    echo "{$gen->key()} - {$gen->current()}";
    $gen->next();
} while (($gen->key() < 20));

echo PHP_EOL;
echo '-----------------------';
echo PHP_EOL;

for (; $gen->key() < 30; $gen->next()) {
    echo "{$gen->key()} - {$gen->current()}";
}