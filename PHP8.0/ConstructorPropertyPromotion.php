<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/16
 * Time: 12:49 AM
 */

namespace PHP8_0\ConstructorPropertyPromotion;

/**
 * 构造器属性提升
 * 更少的样板代码来定义并初始化属性。
 */
// PHP7
//class Point {
//    public float $x;
//    public float $y;
//    public float $z;
//    public function __construct(
//        float $x = 0.0,
//        float $y = 0.0,
//        float $z = 0.0
//    ) {
//        $this->x = $x;
//        $this->y = $y;
//        $this->z = $z;
//
//        var_dump($this->x,$this->y,$this->z);
//    }
//}

// PHP8
class Point {
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
    ) {
        var_dump($this->x,$this->y,$this->z);
    }
}
$point=new Point(1,2,3);
