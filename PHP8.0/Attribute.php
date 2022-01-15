<?php

/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/13
 * Time: 11:42 AM
 */

namespace PHP8_0\Attribute;


/**
 * 注解
 */
class PostsController
{
    /**
     * @see http://xxxxxxxxxxx
     * @Route("/api/posts/{id}", methods={"GET"})
     */
    public function get($id)
    {
        return $id;
    }
}

$refClass = new \ReflectionClass(PostsController::class);

$refMethod = $refClass->getMethod('get');

$refDoc = $refMethod->getDocComment();

list(,$see,$route,)=explode(PHP_EOL,$refDoc);

$see = substr($see, strpos($see, '@see') + strlen('@see '));
$route = substr($route, strpos($route, '@Route') + strlen('@Route '));

var_dump($see,$route);

//exit;

class PostsV2Controller
{
    #[
        See("http://xxxxxxxxxxx"),
        Route("api/posts/{id}", methods: ["get"])
    ]
    public function get($id)
    {
        return $id;
    }
}

$refMethod = new \ReflectionMethod(PostsV2Controller::class, 'get');
$attr = $refMethod->getAttributes(Route::class);
// 将调用 Route的__construct
$attr[0]->newInstance();

//var_dump($attr[0]->getName());
//var_dump($attr[0]->getArguments());

// or
//$attrs=$method->getAttributes();
//foreach ($attrs as $attr){
//    //var_dump($attr->getName(),$attr->getArguments());
//    if($attr->getName()==Route::class){
//        $attr->newInstance();
//    }
//}


/**
 * 自定义Route注解类
 *
 * @see https://www.laruence.com/2020/06/12/5902.html
 * @see https://github.com/symfony/symfony/blob/6.1/src/Symfony/Component/Routing/Annotation/Route.php
 */
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class Route
{
    /**
     * @param array|string $data data array managed by the Doctrine Annotations library or the path
     * @param array|string|null $path
     * @param string[] $requirements
     * @param string[]|string $methods
     * @param string[]|string $schemes
     *
     * @throws \BadMethodCallException
     */
    public function __construct(
        $data = [],
        $path = null,
        string $name = null,
        array $requirements = [],
        array $options = [],
        array $defaults = [],
        string $host = null,
        $methods = [],
        $schemes = [],
        string $condition = null,
        int $priority = null,
        string $locale = null,
        string $format = null,
        bool $utf8 = null,
        bool $stateless = null,
        string $env = null
    )
    {
        var_dump($data);
        var_dump($methods);
        /**
         * ...
         */
    }
}
