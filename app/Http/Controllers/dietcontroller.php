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
        return view('viewdiets');
    }

    public function fill(){
        $name = request('name');
        $length = request('length');
        $difficulty = request('difficulty');
        $goal = request('goal');

        $currentusername = DB::select('select password from users where password = ?', [\Auth::user()->password]);

        DB::insert('insert into diet(diet_username, diet_difficulty, diet_length, diet_goal, diet_name) values(?, ?, ?, ?, ?)',
        [$currentusername, $difficulty, $length, $goal, $name]);
        return view('viewdiets');
        
    }
}
