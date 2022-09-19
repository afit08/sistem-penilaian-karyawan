@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM UBAH KARYAWAN</h4>
	
	<div class='widget-toolbar'>
    <a href='#' data-action='collapse'>
    <i class='ace-icon fa fa-chevron-up'></i>
    </a>
    </div>
    </div>

    <div class='widget-body'>
    <div class='widget-main'>
    @foreach($user as $u)
    <form class='form-horizontal' method="POST" action="/karyawan-finance/update">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $u->id }}"> <br/>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Nama karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='name' name='nama_karyawan' class='input-sm col-xs-12 col-sm-8' value="{{ $u->nama_karyawan }}"/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Alamat karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='name' name='alamat' class='input-sm col-xs-12 col-sm-8' value="{{ $u->alamat }}"/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Tanggal karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='date' id='name' name='tgl_lahir' class='input-sm col-xs-12 col-sm-8' value="{{ $u->tgl_lahir }}"/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>No Telepon karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='name' name='no_tlp' class='input-sm col-xs-12 col-sm-8' value="{{ $u->no_tlp }}"/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Jabatan :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='jabatan' name='jabatan' class='input-sm col-xs-12 col-sm-8' value="{{ $u->jabatan }}" maxlength='100'/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kepala Area (opsional) :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='kepala_area' name='kepala_area' class='input-sm col-xs-12 col-sm-8' value="{{ $u->kepala_area }}" maxlength='100'/>
    </div>
    </div>
    </div>
     
    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Divisi :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <select name='divisi_id' >
    @foreach ($divisi as $item)
    <option value="{{ $item->id }}">{{ $item->divisi }}</option>
    @endforeach
    </select>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>NIP :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='nip' name='nip' class='input-sm col-xs-12 col-sm-8' value="{{ $u->nip }}" maxlength='100'/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Email :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='email' name='email' class='input-sm col-xs-12 col-sm-8' value="{{ $u->email }}" maxlength='100'/>
    </div>
    </div>
    </div>

	<div class='form-actions'>
    <button class='btn btn-info' type='submit'>
    <i class='ace-icon fa fa-check bigger-110'></i>
    Submit
    </button>

    &nbsp; &nbsp; &nbsp;
    
	<button class='btn' type='reset' onclick="self.history.back()">
    <i class='ace-icon fa fa-undo bigger-110'></i>
    Reset
    </button>
                               
    </div>
	</form>
    @endforeach


                            
    </div>
    </div>
    </div>
    </div><!-- /.span -->
    </div>
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
      <!--Akhir isi dari halaman conten -->\
      @endsection