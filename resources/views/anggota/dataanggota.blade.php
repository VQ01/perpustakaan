@extends('layouts.app1')
@section('anggota','active')

@section('isi')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="table-responsive py-4">
                <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Data Anggota</h3>
              {{-- <p class="text-sm mb-0">
                This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
              </p> --}}
            </div>
            <div class="table-responsive py-4">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $item)
                            
                        
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->city}}</td>
                            <td>{{ $item->status}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>{{ $item->updated_at}}</td>
                        </tr>
                        
                       @endforeach
                    </tbody>
                </table>
            </div>
          </div>
                </div>
              </div>
        </div>
      </div>
</div>
    
@endsection

                    