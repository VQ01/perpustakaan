@extends('layouts.app1')
@section('peminjaman','active')

@section('isi')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div id="cetak">
                        <div style="border: solid thin black; padding:10px 10px; color:black;">
                            <table cellpadding="0" cellspacing="0" style="width: 100%; padding:10px 10px; ">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <th>
                                            <u>
                                                <b>BUKTI PEMINJAMAN</b><br>
                                                <b>PERPUSTAKAAN MAJU MUNDUR SUKSES</b>
                                            </u>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr style="text-align: left; font-size:15px">
                                        <th>
                                            No. Peminjaman : {{$datapinjaman->id}}
                                        </th>
                                    </tr>
                                    <tr style="text-align: left; font-size:15px">
                                        <th>
                                            Nama Peminjam : {{$datapinjaman->User->name}}
                                        </th>
                                    </tr>
                                    <tr style="text-align: left; font-size:15px">
                                        <th>
                                            Tanggal Peminjaman : {{$datapinjaman->tglpinjam->format('d F Y')}}
                                        </th>
                                    </tr>
                                    <tr style="text-align: left; font-size:15px">
                                        <th>
                                            Tanggal Pengembalian : {{$datapinjaman->tglhrskembali->format('d F Y')}}
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" border="1" style="width: 100%; border: solid thin black; padding:10px">
                                                <thead>
                                                    <tr style="text-align: center; font-size:15px">
                                                        <th>
                                                            NO.
                                                        </th>
                                                        <th>
                                                            KODE BUKU
                                                        </th>
                                                        <th>
                                                            JUDUL BUKU
                                                        </th>
                                                        <th>
                                                            QTY
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no=1   
                                                    @endphp
                                                    @foreach ($datapinjaman->peminjamandetail as $item) 
                                                    <tr >
                                                        <th style="text-align: center; font-size:15px" >
                                                            {{ $no }}
                                                        </th>
                                                        <th style="text-align: center; font-size:15px">
                                                            {{ $item->buku->kodebuku}}
                                                        </th>
                                                        <th style="text-align: left; font-size:15px">
                                                            {{ $item->buku->judul}}
                                                        </th>
                                                        <th style="text-align: center; font-size:15px">
                                                            1
                                                        </th>
                                                    </tr>
                                                    @php
                                                    $no++  
                                                    @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    
                                    <tr style="text-align: left; font-size:13px">
                                        <td>
                                        <b>Catatan :</b>
                                        <i>Setiap buku yang dipinjam harus dikembalikan tepat waktu.Jika terlambat maka aka dikenakan denda sebesar Rp.1000 per buku per hari</i><br>
                                        <br >
                                        Malang, {{$datapinjaman->tglpinjam->format('d F Y')}} <br>
                                        <br>
                                        Petugas : <br>
                                            <br><br>
                                            @foreach ($datauser as $user)
                                                @if($datapinjaman->admin_id == $user->id)
                                                <b style="text-align: left; font-size:15px">{{$user->name}}</b>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>                           
            </div>
            <button id="btncetak" class="btn btn-md btn-danger"> Cetak Bukti</button>   
            <form action="{{ url('buktipinjamexcel')}}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{$datapinjaman->id}}">
                <button type="submit" class="btn btn-md btn-success"> bukti Excel</button> 
            </form>
            
        </div>
    </div>
</div>
@endsection
@section('skrip1')
<script>
    $('#btncetak').on('click',function(){
        var print=document.getElementById('cetak').innerHTML;
        var originalcontent=document.body.innerHTML;

        // menampilkan jendela cetak
        document.body.innerHTML= print;
        window.print();
        
        //refresh halaman
        document.body.innerHTML=originalcontent;
        window.location.reload(true); 
    })
</script>
@endsection