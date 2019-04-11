<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class routinecontroller extends Controller
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
        $routines = DB::select('select * from rou where rou_username = ?', [\Auth::user()->name]);
        return view('Routines.viewroutines', ['routines' => $routines]);
    }

    public function fill(){
        $name = request('Name');
        $length = request('Length');
        $difficulty = request('difficulty');
        $goal = request('goal');
        $split = request('Split');
        $comment = request("comment");

        $currentusername = \Auth::user()->name;

        {
            DB::insert('insert into rou(rou_difficulty, rou_name, rou_goal, rou_length, rou_split, rou_username) values(?, ?, ?, ?, ?, ?)',
            [$difficulty, $name, $goal, $length, $split, $currentusername]);
            $routines = DB::select('select * from rou where rou_username = ?', [\Auth::user()->name]);
        return view('Routines.viewroutines', ['routines' => $routines]);
        }
    }
}
