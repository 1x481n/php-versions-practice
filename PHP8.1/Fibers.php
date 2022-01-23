<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/23
 * Time: 12:02 AM
 */

/**
 * 纤程
 *
 * Fibers 是用于实现轻量级协作并发的基础类型。它们是一种创建可以像生成器一样暂停和恢复的代码块的方法，但可以从堆栈中的任何位置进行。
 * Fibers 本身并没有提供并发性，仍然需要一个事件循环。但是，它们允许通过阻塞和非阻塞实现共享相同的 API。
 * Fibers 允许摆脱以前在 Promise::then() 或基于生成器的协程中看到的样板代码。库通常会围绕 Fiber 构建进一步的抽象，因此无需直接与它们交互。
 */


$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber');
    echo "Value used to resume fiber: ", $value, PHP_EOL;
});

$value = $fiber->start();


echo "Value from fiber suspending: ", $value, PHP_EOL;

$fiber->resume('test');