<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // 管理员收到的通知
    public function notices()
    {
//        return $this->belongsToMany('App\Models\Notice');// 简写(表名,字段名必须符合规范)
        return $this->belongsToMany('App\Models\Notice', 'admin_notice', 'admin_id', 'notice_id');
    }

    // 给管理员增加通知
    public function addNotice($notice)
    {
        return $this->notices()->save($notice);
                                //detach 删除
    }
}
