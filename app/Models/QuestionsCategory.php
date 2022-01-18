<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionsCategory extends Model
{
    protected $table = 'questions_categories';

    protected $fillable = ['id','category_name'];

    
    public function getLists()
    {
        $questions_categories = QuestionsCategory::pluck('category_name','id');
     
        return $questions_categories;
    }

    public function questions()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Models\Question');
    }
}

