<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question; 
use App\Models\QuestionsCategory;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        
        $category_id = $request->input('category_id'); //カテゴリの値

        $query = Question::query();

        //カテゴリーを指定している 
        if (isset($category_id)) {
            $query = where('category_id', $category_id)->latest()->paginate(10);
        } 
            
        $questions = $query->latest()->paginate(10);
        
        // カテゴリ取得
        $question_category = new QuestionsCategory;

        //一つ一つのカテゴリーIDに対応したカテゴリー名を取り出す　連想配列
        foreach($questions as $question){
            $category_name = $question_category->find($question->category_id);
            $question['category_name'] = $category_name->category_name;
        }

        $question_categories = $question_category->getLists();
       
        return view('questions.index', [
            'questions' => $questions, 
            'question_categories' => $question_categories, 
            'category_id'=>$category_id
        ]);
    
    }


    public function create()
    {
    $question_category = new QuestionsCategory;
    /* dd($question_category); */
    $question_categories = $question_category->getLists()->prepend('選択', '');
 
    return view('questions.create', ['question_categories' => $question_categories]);
    }

    
    public function store(Request $request)
    {
        
        $inputs = $request->all();
        /* dd($inputs); */
        
         $request->validate(
             ['post' => 'required'], 
             ['post.required' => 'テキストが未入力です']);

        //投稿を登録
        Question::create($inputs);
        
        return redirect()->route('questions.index');
        
    }


}
