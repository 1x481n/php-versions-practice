<?php

/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/8®
 * Time: 5:43 下午
 */

namespace PHP8_1\ReadonlyProperties;

/**
 * 只读属性，必须在有且只能进行初始化一次后（构造函数或者setter，不能用对象实例），才能被访问
 * 场景：值对象或数据传输对象（对标Java中VO、DTO）
 */
enum Status: string
{
    case Draft = '草稿';
    case Published = '发表';
    case Archived = '存档';
}

class ReadonlyProperties
{
    public readonly ?Status $status; //or public readonly Status|null $status;

    public function __construct(?Status $status = null)
    {
        if ($status) {
            $this->status = $status;
        }
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }
}

$readonlyProperties = new ReadonlyProperties();
//var_dump($readonlyProperties->getStatus()); //error，只读必须先初始化，才可访问

$readonlyProperties->setStatus(Status::Published);
//$readonlyProperties->setStatus(Status::Archived); //error,只读属性初始化过一次后不可修改
//$readonlyProperties->status = Status::Published; //error,只读属性不能使用对象实例（在全局作用域）赋值
$status = $readonlyProperties->getStatus(); // or  $status = $readonlyProperties->status;

var_dump($status, $status->name, $status->value);
