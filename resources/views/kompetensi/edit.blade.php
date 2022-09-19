@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM UBAH KOMPETENSI</h4>
	
	<div class='widget-toolbar'>
    <a href='#' data-action='collapse'>
    <i class='ace-icon fa fa-chevron-up'></i>
    </a>
    </div>
    </div>

    <div class='widget-body'>
    <div class='widget-main'>
    @foreach($kompetensis as $ko)
    <form class='form-horizontal' method="POST" action="/kompetensi/update">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $ko->id }}"> <br/>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='phone'>Kode Kompetensi:</label>

    <div class='col-xs-12 col-sm-9'>
    <div class='input-group'>
    <span class='input-group-addon'>
    <i class='ace-icon fa fa-key'></i>
    </span>
	
    <input type="text" name="kode_kompetensi" value="{{ $ko->kode_kompetensi }}" readonly='yes' class='input-sm'>
    </div>
    </div>
    </div>
    
    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kompetensi :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <input type='text' id='nama_kompetensi' name='nama_kompetensi' class='input-sm col-xs-12 col-sm-8' value="{{ $ko->nama_kompetensi }}"/>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Tahun Penilaian :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <select name='kategori_id' id="kategori_id" >
    @foreach ($kategoris as $item)
    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
    @endforeach
    </select>
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
      <!--Akhir isi dari halaman conten -->
      @endsection