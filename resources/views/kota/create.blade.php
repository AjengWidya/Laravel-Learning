<!-- resources/views/kota/create.blade.php -->
@extends('default')
@section('content')

<div class="row">
 <div class="pull-left">
    <h2 class="fa fa-check-square-o" style="font-size:28px;">Tambah
Kota</h2>
 </div>
</div>
<!-- if there are creation errors, they will show here --> 
 @if ($errors->any())
  <div class="alert alert-danger">
     <ul>{!! Html::ul($errors->all()) !!} </ul>
  </div>
@endif

{!! Form::open(['route' => 'kota.store','method'=>'POST']) !!}  
<div class="form-group">
  @php 
  $prop=array_pluck(App\Models\Propinsi::all(),'propinsi','id_propinsi') 
  <!--kalau nama provinsi tidak terbaca, mungkin tidak sesuai dengan nama field di tabel-->
 @endphp

 {!! Form::label('id_propinsi', 'Propinsi') !!}
 {!! Form::select('id_propinsi', $prop, null, ['class' => 'form-control','placeholder' => '....pilihan...'] ) !!}   
              
</div>     
<div class="form-group">
 {!! Form::label('nama_kota', 'Nama Kota') !!}
 {!! Form::text('nama_kota', Input::old('nama_kota'), ['class' => 'form-control']) !!}
</div> 

 {!! Form::submit('Simpan', array('class' => 'btn btn-primary')) !!}
 {!! Form::close() !!}

 @endsection