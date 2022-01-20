<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/19
 * Time: 1:29 PM
 */

namespace PHP8_0\NullSafeOperator;

/**
 * Nullsafe 运算符
 * 现在可以用新的 nullsafe 运算符链式调用，而不需要条件检查 null。 如果链条中的一个元素失败了，整个链条会中止并认定为 Null。
 */

//$a=null;
//$a?->fun();



//PHP 7
$country =  null;
$session = null;
if ($session !== null) {
    $user = $session->user;
    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}

//PHP 8
$country = $session?->user?->getAddress()?->country;

