<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanComment extends Model
{
    //テーブル名を決める
    protected $table = 'plan_comments';

    protected $primaryKey = 'id';

    protected $fillable = ['plan_id','comment'];

    public function plans()
    {
        return $this->belongsTo(Plan::class);
    }
}
