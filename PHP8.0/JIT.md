# JIT

[深入了解PHP8 JIT(即时编译)功能](https://blog.p2hp.com/archives/7620)

[PHP 8新特性之JIT简介](https://www.laruence.com/2020/06/27/5963.html)

![](https://www.laruence.com/medias/2020/06/Screen-Shot-2020-06-28-at-18.31.57.png)

左图是PHP8之前的Opcache流程示意图， 右图是PHP8中的Opcache示意图， 可以看出几个关键点:

- Opcache会做opcode层面的优化，比如图中的俩条opcode合并为一条
- PHP8的JIT目前是在Opcache之中提供的
- JIT在Opcache优化之后的基础上，结合Runtime的信息再次优化，直接生成机器码
- JIT不是原来Opcache优化的替代，是增强
- 目前PHP8只支持x86架构的CPU