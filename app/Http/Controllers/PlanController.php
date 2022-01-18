<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan; 
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        $query = Plan::query();

        $plans = $query->latest()->paginate(10);

        return view('plans.index',['plans' => $plans ]);
    }
    
    public function create()
    {
    return view('plans.create');
    }

    public function store(Request $request)
    {
        
        $inputs = $request->all();
        
         $request->validate(
             ['introduction' => 'required'], 
             ['introduction.required' => 'テキストが未入力です']);

        //投稿を登録
        Plan::create($inputs);
        
        return redirect()->route('plans.index');
        
    }

    


}