<?php

namespace App\Models;

use App\Models\Model;

class Environment extends Model
{
    // 显示类型
    public function getTypeAttribute($value)
    {
        $arr = [1 => '单图显示', 2 => '双图显示', 3 => '三图显示'];
        return $arr[$value];
    }
}
