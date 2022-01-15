<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/10
 * Time: 11:51 下午
 */

namespace PHP8_1\NewInitializer;

use JetBrains\PhpStorm\Pure;

/**
 * 新的初始化器
 */
class NewInitializer
{
    private Logger $logger;
    // < PHP8.1
    //public function __construct(?Logger $logger = null,)
    //{
    //    $this->logger = $logger ?? new NullLogger();
    //}
    // PHP8.1
    #[Pure] public function __construct(Logger $logger = new NullLogger(),)
    {
        $this->logger = $logger;
    }

    public function handle()
    {
        $this->logger->log('NewInitializer handle');
    }
}


interface Logger
{
    public function log(string $message);
}

class NullLogger implements Logger
{
    public function log(string $message)
    {
    }
}

class EchoLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}


// 默认使用NullLogger实例
$newInitializer = new NewInitializer();

// 传入EchoLogger实例
$newInitializer = new NewInitializer(new EchoLogger());

$newInitializer->handle();

