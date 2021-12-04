<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {

        $questions = Question::all();

        return view('questions.index', ['questions' => $questions]);//'questions'=indexで読み込む変数の名前を定義
    }


    public function create()
    {
        return view('questions.create');
    }

    
    public function store(Request $request)
    {

        $inputs = $request->all();

        //投稿を登録
        Question::create($inputs);

        //
        return redirect('questions/create');

    }
}
