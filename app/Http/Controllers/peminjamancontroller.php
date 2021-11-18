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

class peminjamancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sts=Auth::user()->status;
        // $datapinjaman=peminjaman::where('statuspinjam','=','selesai')->get();
        //$datapinjaman=peminjaman::all();

        // CARA 1
        // $datapinjaman=DB::table('peminjaman')->join('users','users.id','=','peminjaman.user_id')
        //                                     ->where('peminjaman.statuspinjam','=','belum selesai')
        //                                     ->select('peminjaman.id','peminjaman.tglpinjam','peminjaman.user_id',
        //                                             'users.name','peminjaman.admin_id','peminjaman.tglhrskembali',
        //                                             'peminjaman.statuspinjam','peminjaman.created_at','peminjaman.updated_at')
        //                                     ->get();
        //                                     //return $datapinjaman;
        // $datauser=User::where('status','=','admin')->get();
        // //return $datauser;
        // return view('peminjaman.peminjaman',compact('datapinjaman','datauser'));

        // CARA 2 METODE ELOQUEN
        $datapinjaman=peminjaman::where('peminjaman.statuspinjam','=','belum selesai')->get();
        //return $datapinjaman;
        $datauser=User::where('status','=','admin')->get();
        return view('peminjaman.peminjaman',compact('datapinjaman','datauser','sts'));
    }



    

   
    public function create()
    {
        // $anggota=DB::table('users')->join('peminjaman','users.id','=','peminjaman.user_id')
        // ->where('peminjaman.statuspinjam','=','selesai')
        // ->select('users.id','users.name','peminjaman.statuspinjam')
        // ->get();
        $tglpinjam=Carbon::now();
        $tglskrg=Carbon::now();
        $tglhrskembali=$tglskrg->addDays(7)->format('Y-m-d');

        // anggota yg sedang meminjam buku/status pinjamnya blm slesai
        $agtpinjam=DB::table('users')->join('peminjaman','users.id','=','peminjaman.user_id')
                        ->where('peminjaman.statuspinjam','=','belum selesai')
                        ->select('users.id','users.name','peminjaman.statuspinjam')
                        ->get();
        // return $agtpinjam;
        if($agtpinjam->count()>0){
            $idagtpinjam=collect($agtpinjam)->pluck('id'); // id anggota yg sedang pinjam
        // return $idagtpinjam;
            $dtanggota=DB::table('users')->whereNotIn('id',$idagtpinjam->toArray())->get();
            //return $dtanggota;
        }else{
            $dtanggota=DB::table('users')->get();
        }
        // if($anggota->count() == 0){
        //     $anggota =DB::table('users')->where('status','=','anggota')->get();
        // }
        
        // 
        $sts=Auth::user()->status;
        return view('peminjaman.addpeminjaman',compact('dtanggota','tglpinjam','tglhrskembali','sts'));

        
    }

    
    public function store(Request $request)
    {
        DB::beginTransaction();
        $data = $request->all(); // menangkap inputan dri form lalu di validasi 
        //return $request;
        $validator=Validator::make($data,
        [
            'jdbk1' =>'required',
            'jdbk2' =>'required',
            'jdbk3' =>'required'
            
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        try 
        {
            // //utk menguji data ada error atau tidak namun proses simpan tetap dilakukan
            // simpan ke tabel peminjaman
            $simpanpinjam=peminjaman::create([
                'tglpinjam'=> $request ->tglpinjam,
                'user_id'=> $request ->user_id,
                'admin_id'=> $request ->admin_id,
                'tglhrskembali'=> $request ->tglhrskembali,
                'statuspinjam' => 'belum selesai'
            ]);
            // id terakhir tabel peminjaman di ambil utk id di tabel detail peminjaman
            $idterakhir=$simpanpinjam->id;
                // simpan ke tabe detailpeminjaman
            foreach($request->idbuku as $bkid)
            {
                if($bkid != null)
                {
                    detail::create([
                        'peminjaman_id' => $idterakhir,
                        'buku_id'=> $bkid
                    ]);
                    // buku::where('id','=','$bkid')->update(['status','=','dipinjam']);
                    $updt=buku::findOrfail($bkid);
                    $updt->status='dipinjam';
                    $updt->update();
                    
                }
            }
            
        } 
        catch (Exception $ex)
        {
         DB::rollback();//jika proses eror maka data di tarik lagi stlh disimpan sesaat
         return redirect('peminjaman')->with('pesanslh' ,'Data Gagal Disimpan');

        }
        DB::commit(); //ini untuk mencegah data hilang setelah proses try tdk ada error
        return redirect('peminjaman')->with('pesan' ,'Data Berhasil Disimpan');
    }

    
    public function show($id)
    {
        $datapinjaman=peminjaman::where('id','=',$id)->first(); // membaca 1 baris data saja sesuai id
        $datauser=User::where('status','=','admin')->get();
        $sts=Auth::user()->status;
        //return $datapinjaman;
        return view('peminjaman.buktipinjam', compact('datapinjaman','datauser','sts'));
        
    }

    public function buktipinjamexcel(Request $request){
        //return $request->id;
        $id=$request->id;
        $datapinjaman=peminjaman::where('id','=',$id)->first(); // membaca 1 baris data saja sesuai id
        $datauser=User::where('status','=','admin')->get();
        $sts=Auth::user()->status;
        //return $datapinjaman;
        return view('peminjaman.buktipinjamexcel', compact('datapinjaman','datauser','sts'));
    }

   
    public function edit($id)
    {
        $dtbkhapus= peminjaman::findOrfail($id);
        $sts=Auth::user()->status;
        $datapinjaman=peminjaman::where('id','=',$id)->first(); // membaca 1 baris data saja sesuai id
        //$datauser=User::where('status','=','admin')->get();
        return view('peminjaman.edithapus',compact('dtbkhapus','datapinjaman','sts'));
    }

    
    public function update(Request $request, $id)
    {
        // return $request;
        if($request->has('cek')){
                DB::beginTransaction();
                $data = $request->all(); // menangkap inputan dri form lalu di validasi 
                
            try 
            {
                
                    $i=0;
                    foreach($request->cek as $buku1)
                    {
                        //denda
                        $denda=$request->denda[$i];
                        //simpan detail
                        $stsbuku1=detail::findOrfail($buku1); 
                            $stsbuku1->denda=$denda;
                            
                            $stsbuku1->tglkembaliperbuku =Carbon::now();
                            $stsbuku1->bkstatus ='ada';
                            $stsbuku1->update();
        
                        // update status buku
                        $kodebuku=$stsbuku1->buku_id;
                        $stsbuku2=buku::findOrfail($kodebuku);
                                    
                            $stsbuku2->status ='ada';
                            $stsbuku2->update();
                        $i++;
                    }
                    //cek msih ada peminjaman atau tdk
                    $pengembalian=detail::where('peminjaman_id','=',$request->id)->where('bkstatus','=','dipinjam')->count();
                    if($pengembalian==0){
                        peminjaman::where('peminjaman.id','=',$request->id)->update(['statuspinjam'=>'selesai']);
                    }
                
                
        
                
            } 
            
            catch (Exception $ex)
            {
            DB::rollback();//jika proses eror maka data di tarik lagi stlh disimpan sesaat
            return redirect('peminjaman')->with('pesanslh' ,'Data Gagal Di Edit');

            }
            DB::commit(); //ini untuk mencegah data hilang setelah proses try tdk ada error
            return redirect('peminjaman')->with('pesan' ,'Data Berhasil Di Edit');

            
        }
        else
        {
            return back()->with('pesanslh' ,'Anda belum memilih buku untuk dikembalikan');

        }
    }


    
    public function destroy($id)
    {
        DB::beginTransaction();
        try 
        {
            $pinjamhapus= peminjaman::findOrfail($id);
            $pinjamhapus->delete();
        } 
        catch (Exception $ex)
        {
         DB::rollback();
         return redirect('peminjaman')->with('pesanslh' ,'Data Gagal Di Hapus');

        }
        DB::commit(); 
        return redirect('peminjaman')->with('pesan' ,'Data Berhasil Di Hapus');
        
    }

    public function judul($kodebuku=null)
    {
        $judul=buku::where('kodebuku','=',$kodebuku)
        ->where('status','=','ada')
        ->select('id','judul')->get();
        $jmldata=$judul->count();
        if($jmldata> 0)
        {
            return $judul;
        }
        else
        {
            $hasil=collect(
                [
                    ['id' => '','judul' => '']
                ]
                );
                return $hasil;
        }
        
    }

    public function riwayat()
    {
        
    }

   
    
}
