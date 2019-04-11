<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class setcontroller extends Controller
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
        $sets = DB::select('select * from exer_set where exer_username = ?', [\Auth::user()->name]);
        return view('workouts/viewsets', ['sets' => $sets]);
    }

    public function fill(){
        $username = \Auth::user()->name;
        $type = request('type');
        $numreps = request('numreps');
        $time = request('time');
        $distance = request('distance');
        $weight = request('weight');
        $comment = request('comment');

            DB::insert('insert into exer_set(exer_set_num_reps, exer_set_time, exer_set_distance, exer_set_weight, exer_set_type, exer_set_comment, exer_username) values(?, ?, ?, ?, ?, ?, ?)',
            [$numreps, $time, $distance, $weight, $type, $comment, $username]);
        $sets = DB::select('select * from exer_set where exer_username = ?', [\Auth::user()->name]);
        return view('workouts/viewsets', ['sets' => $sets]);
    }

}
