<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    //使用模型,数组方式插入数据,必须指定字段
    protected $guarded = []; //不可以写入的字段(黑名单)
//    protected $fillable = []; //可以写入的字段(白名单)
}
