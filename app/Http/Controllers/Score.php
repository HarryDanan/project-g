<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Score extends Controller
{
    public function index(){
        $score = DB::table('score')->paginate(10);
        return view('score',['score'=>$score]);

    }
    public function store (Request $request){
        DB::table('score')->insert([
            'nilai'=> $request->nilai,
            'nama' =>$request->nama
        ]);

        return redirect('/score');
    }
}
