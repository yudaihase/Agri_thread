<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //テーブル名を決める
    protected $table = 'questions';

    //可変項目(保存したい値)
    /* protected $fillable =
    ['user_id','category_id','post','created_at']; */

    protected $fillable = ['category_id','post'];


    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function questions_categories()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('App\Models\QuestionsCategory');
    }
}
