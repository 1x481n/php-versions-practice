<?php

/**
 * Created by IntelliJ IDEA.
 * User: 1x481n
 * Date: 2022/1/8
 * Time: 5:35 下午
 */


/**
 * 纯粹枚举
 */

namespace PHP8_1\PureEnum;


enum Status
{
    case Draft;
    case Published;
    case Archived;
}

function dumpStatus(Status $status)
{
    var_dump($status);
}
dumpStatus(Status::Published);


/**
 * 回退枚举
 */

namespace PHP8_1\BackedEnum;

enum Status: string
{
    case Draft = '草稿';
    case Published = '发表';
    case Archived = '存档';
}

function dumpStatus(Status $suit)
{
    var_dump($suit, $suit->name, $suit->value);
}

dumpStatus(Status::Archived);
