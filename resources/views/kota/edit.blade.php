<!-- resources/views/kota/edit.blade.php -->
@extends('default')
@section('content')

<div class="row">
 <div class="pull-left">
   <h2 class="fa fa-check-square-o" style="font-size:28px;">
      Ubah  {!! $kota->nama_kota !!} </h2>
 </div>
</div>
<!-- if there are creation errors, they will show here -->
{!! Html::ul($errors->all()) !!}

{!! Form::model($kota, ['route' =>['kota.update', $kota->id], 
                'method' => 'PUT']) !!}
   @php 
       $prop=array_pluck(App\Models\Propinsi::all(), 'propinsi','id') 
   @endphp

   <div class="form-group">
    {!! Form::label('id_propinsi', 'Nama Propinsi') !!}
    {!! Form::select('id_propinsi',$prop,null,
                   ['class' => 'form-control'])!!}     
    </div>

   <div class="form-group">
     {!! Form::label('nama_kota', 'Nama Kota') !!}
     {!! Form::text('nama_kota', null,['class' => 'form-control','placeholder'=>'nama kota']) !!}
   </div>
    
{!! Form::submit('Simpan', array('class' => 
          'btn btn-primary')) !!}
{!! Form::close() !!}
@endsection