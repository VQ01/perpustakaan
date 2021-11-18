<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\buku;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sts=Auth::user()->status;
        $id=Auth::user()->id;
        $buku=buku::all();
        $profile=User::where('users.id','=',$id)->first();
        // return $sts;
        
        return view('dashboard.dashboard',compact('sts','buku','profile'));
    }
}
