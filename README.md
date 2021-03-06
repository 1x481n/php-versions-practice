# PHP各版本实践

- 不同版本的新特性实践


## PHP版本大全

### PHP博物馆
https://museum.php.net/

### PHP8.1
- https://www.php.net/releases/8.1/zh.php
### PHP8.0
- https://www.php.net/releases/8.0/zh.php

### 版本记录（百度百科）
| 版本    | 发布日期       | 最终支持       | 相关更新及备注                                                                                  |
|-------|------------|------------|------------------------------------------------------------------------------------------|
| 1.0   | 1995-06-08 | --         | 首次使用                                                                                     |
| 2.0   | 1996-04-16 | --         | 针对PHP 1.0的改进版，速度更快、体积更小，更容易产生动态网页。                                                       |
| 3.0   | 1998-06-06 | 2000-10-20 | Zeev Suraski和Andi Gutmans重写了底层，支持可扩展组件。                                                  |
| 4.0   | 2000-05-22 | 2001-06-23 | 增加了Zend引擎，支持更多的 web 服务器、HTTP Sessions 支持、输出缓冲、更安全的用户输入和一些新的语言结构                          |
| 4.1   | 2001-12-10 | 2002-03-12 | 加入了superglobal(超全局的概念，即$_GET、$_POST等)                                                    |
| 4.2   | 2002-04-22 | 2002-09-06 | 默认禁用register_globals                                                                     |
| 4.3   | 2002-12-27 | 2005-03-31 | 引入了命令行界面CLI用来不用CGI                                                                       |
| 4.4   | 2005-07-11 | 2008-08-08 | 修复了一些致命错误                                                                                |
| 5.0   | 2004-07-13 | 2005-09-05 | Zend升级为二代引擎，开始支持面向对象编程                                                                   |
| 5.1   | 2005-11-24 | 2006-08-24 | 引入了编译器来提高性能、增加了PDO作为访问数据库的接口                                                             |
| 5.2   | 2006-11-02 | 2011-01-06 | 默认启用过滤器扩展                                                                                |
| 5.3   | 2009-06-30 | 2014-08-14 | 支持命名空间;使用XMLReader和XMLWriter增强XML支持;支持SOAP                                               |,延迟静态绑定，跳转标签（有限的goto）,|闭包，Native|PHP|archives。php-fpm在php5.3.3|[26]||版本成为了官方正式组件|
| 5.4   | 2012-03-01 | 2015-09-03 | 支持Trait、简短数组表达式。移除了register_globals,                                                     |safe_mode,|allow_call_time_pass_reference,|session_register(),|session_unregister(),|magic_quotes以及session_is_registered()。加入了内建的Web服务器。增强了性能，减小内存使用量。|
| 5.5   | 2013-06-20 | 2016-07-10 | 支持generators，用于异常处理的finally                                                              |，将OpCache（基于|Zend|Optimizer+）加入官方发布中。|
| 5.6   | 2014-08-28 | 2018-12-31 | 常数标量表达式、可变参数函数、参数拆包、新的求幂运算符、函数和常量的use语句的扩展、新的phpdbg调试器作为SAPI模块，以及其他更小的改进。使用php://input替代 |$HTTP_RAW_POST_DATA，iconv和mbstring配置选项中和编码相关的选项废弃。|
| 6.x   | 未发布        | --         | 取消掉的、从未正式发布的PHP版本。                                                                       |
| 7.0   | 2015-12-03 | 2018-12-03 | Zend引擎升级到三代                                                                              |，整体性能是5.6的2倍。移除ereg、mssql、mysql、sybase_ct等4个扩展。引入了类型声明，有两种模式:|强制|(默认)|和|严格模式。支持匿名类。|
| 7.1   | 2016-12-01 | 2019-12-01 | void返回值类型，类常量，可见性修饰符，新增可为空（Nullable）类型，新增短数组语法（[]）的，支持多异常捕获处理，废弃了mcrypt                  |扩展用OpenSSL取代|
| 7.2   | 2017-11-30 | 2020-11-30 | GD                                                                                       |扩展内的|png2wbmp()|和|jpeg2wbmp()|被废弃，对象参数和返回类型提示、抽象方法重写等|
| 7.3   | 2018-12-06 | 2021-12-06 | 更灵活的                                                                                     |Heredoc|和|Nowdoc|语法，大小写不敏感的常量声明现被废弃，在字符串中搜索非字符串内容都将被视为字符串，而不是|ASCII|编码值。|
| 7.4   | 2019-11-28 | 2022-11-28 | Preloading预加载机制，改进OpenSSL、弱引用等。属性添加限定类型、有限返回类型协变与参数类型逆变、数值文字分隔符，为过渡到PHP8做了一定的准备。         |
| 8.0.0 | 2020-11-26 | --         | JIT                                                                                      |（Just-In-Time即时编译）、新增static返回类型、新增mixed|类型、命名参数（Named|arguments）和注释（Attributes）|[41]||，不再允许通过静态调用的方式去调用非静态方法，字符串与数字的比较将首先将数字转为字符串再比较|[40]|