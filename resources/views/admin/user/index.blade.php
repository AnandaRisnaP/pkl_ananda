@extends('layouts.app') 
@push('css') 
     
@endpush 
@section('content') 
 
<div class="row column_title"> 
  <div class="col-md-12"> 
     <div class="page_title"> 
        <h2>Data user</h2> 
     </div> 
  </div> 
</div> 
<div class="white_shd full margin_bottom_30"> 
  <div class="full graph_head"> 
     <div class="heading1 margin_0"> 
        
      <a href="/admin/data/user/create" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> 
     </div> 
  </div> 
  <div class="table_section padding_infor_info"> 
     <div class="table-responsive-sm"> 

      <form method="get" action="/admin/data/user/cari">
         @csrf
         <div style="display: flex; margin-left: auto; gap: 8px; align-items: center;">
            <input type="text" class="form-control" name="cari" placeholder="Cari Data" style="max-width: 300px;">
            <button type="submit" class="btn btn-flat btn-sm btn-primary">
               <i class="fa fa-search"></i> Cari
            </button>
         </div>
      </form> <br/>

        <table class="table table-bordered"> 
           <thead> 
              <tr style="background-color: rgb(52, 52, 51); font-weight:bold;color:aliceblue"> 
                <th>No</th> 
                <th style="text-align: center">Nama</th> 
                <th style="text-align: center">Username</th> 
                <th style="text-align: center">Hak Akses</th> 
                <th style="text-align: center">Aksi</th> 
              </tr> 
           </thead> 
           <tbody> 
             
            @foreach ($data as $key => $item) 
            <tr> 
              <td>{{1 + $key}}</td> 
              <td>{{$item->name}}</td> 
              <td>{{$item->username}}</td> 
              <td>{{$item->roles}}</td> 
              <td> 
                <a href="/admin/data/user/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a> 
                <a href="/admin/data/user/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a> 
              </td> 
            </tr> 
            @endforeach 
           </tbody> 
        </table> 
     </div> 
  </div> 
</div> 
 
@endsection 
@push('js') 
 
@endpush