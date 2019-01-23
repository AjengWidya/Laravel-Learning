@extends('default')
@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2 class="fa fa-check-square-o" style="font-size:28px;">
       Tabel Rekaman Kota</h2>
    </div>
     
    <div class="pull-right">
     <a href="{{route('kota.create')}}" class="btn btn-primary btn-xs">
   Tambah </a>           
    </div>
    </div>
</div>
  
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
   <thead>
      <tr>
         <th>Id</th>
         <th>ID Propinsi </th>
         <th>Nama Propinsi </th>
         <th>Nama Kota</th>
          <th>Aksi</th>
       </tr>
  </thead>
  <tbody>
    @foreach($kota as $key => $value)
     <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->id_propinsi}}</td>
      <td>{{ $value->getPropinsi->propinsi}}</td>
      <td>{{ $value->nama_kota }}</td>
      <td>
        <form action="{{ route('kota.destroy', $value->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
         <a href="{{ route('kota.edit',$value->id) }}" 
         class="btn btn-sm btn-primary">Edit</a><button onclick="return confirm('Yakin ingin menghapus kota : {{$value->nama_kota}}........?')">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
<?php echo str_replace('/?', '?', $kota->render()); ?>

@endsection