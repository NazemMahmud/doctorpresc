<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check()){
//            $role_id = DB::table( 'user_role' )->where( 'user_id', Auth::id())->first()->role_id;
//            if($role_id == 4){
                return view('welcome');
//            }
        }
        return view('front.home');
    }
}
