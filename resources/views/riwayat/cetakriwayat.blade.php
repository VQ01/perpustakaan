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
                                                <b>DATA RIWAYAT PEMINJAMAN</b><br>
                                                <b>PERPUSTAKAAN MAJU MUNDUR SUKSES</b>
                                            </u>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                    
                                    <tr style="text-align: left; font-size:15px">
                                        <th>
                                            Admin : 
                                            
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
                                                            No. Peminjaman  
                                                        </th>
                                                        <th>
                                                            Nama Peminjam  
                                                        </th>
                                                        <th>
                                                            Nama Admin  
                                                        </th>
                                                        <th>
                                                            Tanggal Peminjaman 
                                                        </th>
                                                        <th>
                                                            Tanggal Pengembalian 
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        {{-- <th>
                                                            KODE BUKU
                                                        </th>
                                                        <th>
                                                            JUDUL BUKU
                                                        </th> --}}
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no=1   
                                                    @endphp
                                                    @foreach ($riwayat as $item) 
                                                    <tr >
                                                        <td style="text-align: center; font-size:15px" >
                                                            {{ $no }}
                                                        </td>
                                                        <td style="text-align: center; font-size:15px">
                                                            {{$item->id}}
                                                        </td>
                                                        <td style="text-align: center; font-size:15px">
                                                            {{$item->User->name}}
                                                        </td>
                                                        <td  style="text-align: center; font-size:15px">
                                                            @foreach ($datadmin as $user)
                                                                @if($item->admin_id == $user->id)
                                                                {{$user->name}}

                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td style="text-align: center; font-size:15px">
                                                            {{$item->tglpinjam->format('d F Y')}}
                                                        </td>
                                                        <td style="text-align: center; font-size:15px">
                                                            {{$item->tglhrskembali->format('d F Y')}}
                                                        </td>
                                                        <td style="text-align: center; font-size:15px">
                                                            {{$item->statuspinjam}}
                                                        </td>
                                                        {{-- @foreach ($riwayat->detail as $bk)
                                                           
                                                        @endforeach --}}
                                                        {{-- <th style="text-align: left; font-size:15px">
                                                            {{$item->buku->kodebuku}}
                                                        </th>
                                                        <th style="text-align: left; font-size:15px">
                                                            {{$item->buku->judul}}
                                                        </th>  --}}
                                                    </tr>
                                                    @php
                                                    $no++  
                                                    @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                </div>                           
            </div>
            <button id="btncetak" class="btn btn-md btn-danger"> Cetak Bukti</button>   
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