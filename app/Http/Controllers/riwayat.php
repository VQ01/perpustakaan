<?php

namespace App\Http\Controllers;
use DB;
use App\anggota;
use App\peminjaman;
use App\peminjamandetail as detail;
use App\User;
use App\buku;
use Carbon\Carbon;
use Illuminate\Http\Request;

class riwayat extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $riwayat=DB::table('peminjaman')->join('users','users.id','=','peminjaman.user_id')->select('peminjaman.id',
                                                    'peminjaman.tglpinjam','peminjaman.user_id',
                                                    'users.name','peminjaman.admin_id','peminjaman.tglhrskembali',
                                                    'peminjaman.statuspinjam','peminjaman.created_at','peminjaman.updated_at')
                                        ->get();
        $datadmin=User::where('status','=','admin')->get();
        // $usr=peminjaman::select('user_id')->get();
        
        // $datauser=User::where('status','=',$usr)->get();
        // return $riwayat;
        return view('riwayat.riwayatpinjam',compact('riwayat','datadmin'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
    
        
        
        
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
