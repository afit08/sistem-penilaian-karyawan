@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM TAMBAH DATA KOMPETENSI</h4>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'>
    <i class='ace-icon fa fa-chevron-up'></i>
    </a>
    </div>
    </div>

    <div class='widget-body'>
    <div class='widget-main'>
    <form class='form-horizontal' method="POST" action="{{ route('save-kompetensi') }}">
    {{ csrf_field() }}

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kode Kompetensi :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='kode_kompetensi' name='kode_kompetensi' class="input-sm col-xs-12 col-sm-8 @error('kode_kompetensi') is-invalid @enderror" maxlength='100' value="{{ old('kode_kompetensi') }}"/>
                </div>
            </div>
    @error('kode_kompetensi')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kompetensi :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='nama_kompetensi' name='nama_kompetensi' class="input-sm col-xs-12 col-sm-8 @error('nama_kompetensi') is-invalid @enderror" maxlength='100' value="{{ old('nama_kompetensi') }}"/>
                </div>
            </div>
    @error('nama_kompetensi')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>
    
    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kriteria Kompetensi :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <select name='kategori_id' id="kategori_id" >
    @foreach ($kategori as $item)
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