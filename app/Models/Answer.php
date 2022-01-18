<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //テーブル名を決める
    protected $table = 'answers';
    
    protected $primaryKey = 'id';

    protected $fillable = ['question_id','answer'];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
