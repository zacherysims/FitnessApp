<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class personellcontroller extends Controller
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
        return view('home');
    }

    public function fill(){
        $username = \Auth::user()->name;
        $weight = request('weight');
        $goalweight = request('goalweight');
        $traininggoal = request('goal');
        $height = request('height');
        $age = request("age");

        $currentuser = DB::select('select * from personnel where username = ?', [$username]);
        foreach($currentuser as $observeduser){
             echo "<script type='tex/javascript'>Sorry, that username is taken</script>";
             return view('filloutform');
    }

        {
            DB::insert('insert into personnel(username, password, weight, goal_weight, training_goal, height, age) values(?, ?, ?, ?, ?, ?, ?)',
            [$username, \Auth::user()->password, $weight, $goalweight, $traininggoal, $height, $age]);
            return view('welcome');
        }
    }
}
