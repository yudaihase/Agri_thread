<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //テーブル名を決める
    protected $table = 'questions';

    //可変項目(保存したい値)
    protected $fillable =
    ['post'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
/* 'user_id', 'category_id', */