<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;

class bukucontroller extends Controller
{
    //tampil semua data
    public function index()
    {
        $databuku=buku::all();
        $sts=Auth::user()->status;
        //$dtuser=
        // return $sts;
        return view('buku.tampil',compact('databuku','sts'));
    }

   // tambah data baru
    public function create()
    {
        $sts=Auth::user()->status;
        return view('buku.add',compact('sts'));
    }

    //menyimpan data baru
    public function store(Request $request)
    {
        DB::beginTransaction();
        $data = $request->all(); // menangkap inputan dri form lalu di validasi 
        $validator=Validator::make($data,
        [
            'kodebuku' => 'required|unique:buku,kodebuku',
            'judul' =>'required',
            'pengarang' =>'required',
            'penerbit' =>'required',
            'tahun' =>'required',
            'cover' =>'required|mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        try 
        {
            // //utk menguji data ada error atau tidak namun proses simpan tetap dilakukan
            
            // $hasil= buku::create($data);
            // //return $redirect('buku')->with('pesan' ,'Data Berhasil Disimpan');

            // //nama file foto
            // $idterakhir=$hasil->id;
            // //fft= nama file foto terbaru
            // $fft=$idterakhir.'.'.$request->file('cover')->extension();
            // // simpan foto
            // $request->file('cover')->storeAs('public/gambarbuku/',$fft);

            //krn cara di atas kurang efektif utk menamai file

            // cara 2 
            $fft2=$request->kodebuku.'.'.$request->file('cover')->extension();
            $bukubaru= new buku;
                $bukubaru->kodebuku   =$request->kodebuku;
                $bukubaru->judul      =$request->judul;
                $bukubaru->pengarang  =$request->pengarang;
                $bukubaru->penerbit   =$request->penerbit;
                $bukubaru->tahun      =$request->tahun;
                $bukubaru->cover      =$fft2;
            $bukubaru->save();

            $request->file('cover')->storeAs('public/gambarbuku/',$fft2);
        } 
        catch (Exception $ex)
        {
         DB::rollback();//jika proses eror maka data di tarik lagi stlh disimpan sesaat
         return redirect('buku')->with('pesanslh' ,'Data Gagal Disimpan');

        }
        DB::commit(); //ini untuk mencegah data hilang setelah proses try tdk ada error
        return redirect('buku')->with('pesan' ,'Data Berhasil Disimpan');
        
    }

   //menampilkan hasil pencarian
    public function show($id)
    {
        //MENCARI DATA YG AKAN DI EDIT
        $dtbkhapus= buku::findOrfail($id);
        $sts=Auth::user()->status;
        return view('buku.delete', compact('dtbkhapus','sts'));
    }

    //edit data
    public function edit($id)
    {
        
        //MENCARI DATA YG AKAN DI EDIT
        $edtbk= buku::findOrfail($id);
        $sts=Auth::user()->status;
        return view('buku.edit',compact('edtbk','sts'));
    }

    //untuk update data yg tlh di edit
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $data = $request->all(); // menangkap inputan dri form lalu di validasi 
        $validator=Validator::make($data,
        [
            'kodebuku' => 'required|unique:buku,kodebuku,'.$id,
            'judul' =>'required',
            'pengarang' =>'required',
            'penerbit' =>'required',
            'tahun' =>'required',
            'status'=>'required',
            'cover' =>'mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        try 
        {
            $bukuedit= buku::findOrfail($id);
                $bukuedit->kodebuku   =$request->kodebuku;
                $bukuedit->judul      =$request->judul;
                $bukuedit->pengarang  =$request->pengarang;
                $bukuedit->penerbit   =$request->penerbit;
                $bukuedit->tahun      =$request->tahun;
                $bukuedit->status     =$request->status;
            $bukuedit->update();

            if($request->has('cover'))
            {
               
                
                $fft=$bukuedit->cover;
                $request->file('cover')->storeAs('public/gambarbuku/',$fft);

    
            }
        } 
        catch (Exception $ex)
        {
         DB::rollback();//jika proses eror maka data di tarik lagi stlh disimpan sesaat
         return redirect('buku')->with('pesanslh' ,'Data Gagal Di Edit');

        }
        DB::commit(); //ini untuk mencegah data hilang setelah proses try tdk ada error
        return redirect('buku')->with('pesan' ,'Data Berhasil Di Edit');
        // $dataedit=$request->all();
        // if($request->has('cover'))
        // {
        //     return "ada kiriman foto";

        // }
        // else
        // {
        //     return "tdk ada kiriman foto";
        // }
        // return$request->file('cover')->getClientOriginalName();
    }

    // hapus data
    public function destroy($id)
    {
        DB::beginTransaction();
        try 
        {
            $bukuhapus= buku::findOrfail($id);
            $bukuhapus->delete();
        } 
        catch (Exception $ex)
        {
         DB::rollback();
         return redirect('buku')->with('pesanslh' ,'Data Gagal Di Hapus');

        }
        DB::commit(); 
        return redirect('buku')->with('pesan' ,'Data Berhasil Di Hapus');
    }
}
