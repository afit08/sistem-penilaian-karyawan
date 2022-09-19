@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM DETAIL DATA KARYAWAN</h4>

    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'><i class='ace-icon fa fa-chevron-up'></i></a>
    </div>
    </div>
    @foreach($user as $u)
    <div class="ml-5" style="margin-left: 20px;">
	    <p>Nama Karyawan            : {{$u->nama_karyawan}}</p> 
	    <p>NIP Karyawan             : {{$u->nip}}</p> 
	    <p>Alamat Karyawan          : {{$u->alamat}}</p> 
	    <p>No. Telepon Karyawan     : {{$u->no_tlp}}</p> 
	    <p>Tanggal Lahir Karyawan   : {{$u->tgl_lahir}}</p> 
	    <p>Email Karyawan           : {{$u->email}}</p> 
	    <p>Jabatan Karyawan         : {{$u->jabatan}}</p> 
	    <p>Kepala Area              : {{$u->kepala_area}}</p> 
	    <p>Divisi                   : {{$u->Divisi->divisi}}</p> 
    </div>
    @endforeach
    </div>
    </div><!-- /.span -->
    </div>
@endsection 
      