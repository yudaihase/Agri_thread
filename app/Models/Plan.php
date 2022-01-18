<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //テーブル名を決める
    protected $table = 'plans';

    //可変項目(保存したい値)
    protected $fillable = ['plan_location','fund','plan_area','plan_crop','introduction','created_at'];


    public function plan_comments()
    {
        return $this->hasMany(PlanComment::class);
    }

}
