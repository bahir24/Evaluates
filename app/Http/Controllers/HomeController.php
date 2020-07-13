<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Evaluate;
use App\Science;

class HomeController extends Controller
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
        $user = Auth::user();
        $evaluates = $user->evaluates;
        // $sciences = Evaluate::class->scienc;
        // $evaluates->science = $evaluates->science->science;
        // $sciences = $evaluates->science;
        // dd($evaluate->science);
        $sciences = Science::all();
        foreach($evaluates as $evaluate){
            $evaluate->science = $sciences[8 % $evaluate->science]->science;
        }
        // dd(Evaluate->science);
        // dd($sciences);
        $user->group = $user->groups->group;
        $user->course = $user->groups->course;

        return view('sections/profile/home', ['user' => $user], ['evaluates' => $evaluates]);
    }
}
