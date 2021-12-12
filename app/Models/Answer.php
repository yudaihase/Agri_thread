<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //テーブル名を決める
    protected $table = 'answers';
    protected $primaryKey = 'id';

    //可変項目(保存したい値)
    /* protected $fillable =
    ['user_id','category_id','post','created_at']; */

    protected $fillable = ['question_id','answer'];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
