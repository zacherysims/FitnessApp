<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dietcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $diets = DB::select('select * from diet where diet_username = ?', Auth::user()-id);

        return view('viewdiets.index', ['diets' => $diets]);

    }

    public function adddiet(){
        DB::insert('insert into diet (diet_username, diet_difficulty, diet_length, diet_goal, diet_name) values (?, ?, ?, ?, ?)',
        [\Auth::user()->id, request('difficulty'), request('length'), request('goal'), request('name')]);
    }
}
