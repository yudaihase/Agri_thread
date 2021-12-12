<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{

    public function store(Request $request)
    {
        /* dd($request); */
        
/*          $request->validate(
             ['post' => 'required'], 
             ['post.required' => 'テキストが未入力です']); */

        //投稿を登録
        Answer::create([
            'question_id' => $request->question_id,
            'answer'    => $request->answer,
            ]);
        
        return redirect()->route('answers.show', $request->question_id);
    }

    public function show($id)
    {

        $questions = Question::find($id);// 投稿を取得
        
        $answers = $questions->answers()->get(); // 投稿が持つ回答を取得

        return view('questions.detail', ['questions' => $questions , 'answers' => $answers]);//'questions'=indexで読み込む変数の名前を定義
    }

}
