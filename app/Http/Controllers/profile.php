<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Illuminate\Http\Request;

class profile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id=Auth::user()->id;
        $sts=Auth::user()->status;
        $profile=User::where('users.id','=',$id)->first();
        // $profile=DB::table('users')->where('users.id','=',$id)
        //                             ->select('users.id','users.name','users.email',
        //                             'users.firstname','users.lastname','users.address',
        //                             'users.city','users.country','users.postalcode','users.status',
        //                             'users.aboutme')
        //                             ->get();
        //return $profile;
        return view ('profile.profile',compact('profile','sts'));
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
        $profile=User::where('users.id','=',$id)->first();
        $sts=Auth::user()->status;
        return view ('profile.editprofile',compact('profile','sts'));
    }

    
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $data = $request->all(); // menangkap inputan dri form lalu di validasi 
        //return $request;
        try 
        {
            
            $edtprofile= User::findOrfail($id);
                $edtprofile->id             =$request->id;
                $edtprofile->email          =$request->email;
                $edtprofile->name           =$request->name;
                $edtprofile->firstname      =$request->firstname;
                $edtprofile->lastname       =$request->lastname;
                $edtprofile->address        =$request->address;
                $edtprofile->city           =$request->city;
                $edtprofile->country        =$request->country;
                $edtprofile->postalcode     =$request->postalcode;
                $edtprofile->aboutme        =$request->aboutme;
            $edtprofile->update();
        } 
        
        catch (Exception $ex)
        {
         DB::rollback();//jika proses eror maka data di tarik lagi stlh disimpan sesaat
         return redirect('profile')->with('pesanslh' ,'Data Gagal Di Edit');

        }
        DB::commit(); //ini untuk mencegah data hilang setelah proses try tdk ada error
        return redirect('profile')->with('pesan' ,'Data Berhasil Di Edit');
    }

    
    public function destroy($id)
    {
        //
    }
}
