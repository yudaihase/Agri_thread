<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {

        $questions = Question::all();
        /* dd($questions); */

        return view('questions.index', ['questions' => $questions]);//'questions'=indexで読み込む変数の名前を定義
    }


    public function create()
    {
        return view('questions.create');
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
