<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guestbookmgrt as gs;
use App\User;
use App\peminjaman;
use App\peminjamandetail as detail;
use App\buku;
use DB;
use Carbon\Carbon;
use Auth;
class guestbook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $sts=Auth::user()->status;
        $id=Auth::user()->id;
        $sql=DB::table('users')->join('peminjaman','users.id','=','peminjaman.user_id')
                            ->join('peminjamandetail','peminjaman.id','=','peminjamandetail.peminjaman_id')
                            ->join('buku','peminjamandetail.buku_id','=','buku.id')
                            ->where('users.id','=',$id)
                            ->select('users.name','peminjaman.tglpinjam','peminjaman.tglhrskembali',
                                    'peminjaman.statuspinjam','buku.judul')
                            ->get();
        //  return $sql;
        return view('riwayat.riwayatuser',compact('sql','sts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $simpanbg=$request->all();
        // return $simpanbg; 
        $data = $request->all();
        $hasil= gs::create($data);
        if($hasil)
        {
            return redirect('guestbook')->with('pesan' ,'Data Berhasil Disimpan');
        }
        else {
           return redirect('guestbook')->with('pesanslh' ,'Data Gagal Disimpan');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
