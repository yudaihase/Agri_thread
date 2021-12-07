<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {

        $questions = Question::all();

        return view('questions.index', ['questions' => $questions]);//'questions'=indexで読み込む変数の名前を定義
    }


    public function create()
    {
        return view('questions.index');
    }

    
    public function store(Request $request)
    {

         $request->all();

         $request->validate(
             ['post' => 'required'], 
             ['post.required' => 'テキストが未入力です']);

        //投稿を登録
        Question::create($request);

        //
        return redirect(route('index'));


    }
}
