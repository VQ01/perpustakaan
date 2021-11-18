<?php

namespace App\Http\Controllers;
use App\peminjaman;
use App\peminjamandetail as detail;
use App\User;
use App\buku;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class peminjamandetail extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $riwayat=peminjaman::all();
        $datadmin=User::where('status','=','admin')->get();
        $buku=buku::all();
        $sts=Auth::user()->status;
       //return $riwayat;
        return view('riwayat.riwayatpinjam',compact('riwayat','datadmin','buku','sts'));
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //$riwayat=peminjaman::where('id','=',$id)->get();
        $riwayat=peminjaman::all();
        $datadmin=User::where('status','=','admin')->get();
        $buku=buku::all();
        $sts=Auth::user()->status;
        //return $riwayat;
        return view('riwayat.cetakriwayat',compact('riwayat','datadmin','buku','sts'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
