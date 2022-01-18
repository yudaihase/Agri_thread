<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanComment;
use App\Models\Plan;
use App\Http\Controllers\Controller;

class PlanCommentController extends Controller
{

    public function store(Request $request)
    {

        //投稿を登録
        PlanComment::create([
            'plan_id' => $request->plan_id,
            'comment'    => $request->comment,
            ]);
        
        return redirect()->route('comments.show', $request->plan_id);
    }

    public function show($id)
    {
        $plans = Plan::find($id);// 投稿を取得
        
        $comments = $plans->plan_comments()->get(); // 投稿が持つ回答を取得

        return view('plans.detail', ['plans' => $plans , 'comments' => $comments]);//'questions'=indexで読み込む変数の名前を定義
    }

}
