<?php
/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/16
 * Time: 1:10 AM
 */

namespace PHP8_0\UnionTypes;

/**
 * 联合类型
 * 相较于以前的 PHPDoc 声明类型的组合， 现在可以用原生支持的联合类型声明取而代之，并在运行时得到校验。
 */
class Number
{
    /** @var int|float */
    private $number;

    /**
     * @param float|int $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }
}


new Number('NaN'); // Ok


class Number2
{
    public function __construct(private int|float $number)
    {
    }
}

new Number2('NaN'); // TypeError