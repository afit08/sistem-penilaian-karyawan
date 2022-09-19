@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM TAMBAH KARYAWAN</h4>

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
    <form class='form-horizontal' method="POST" action="{{ route('save-karyawan-prfs') }}">
    {{ csrf_field() }}

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Nama karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='nama_karyawan' name='nama_karyawan' class="input-sm col-xs-12 col-sm-8 @error('nama_karyawan') is-invalid @enderror" maxlength='100' value="{{ old('nama_karyawan') }}"/>
                </div>
            </div>
    @error('nama_karyawan')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Alamat karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='alamat' name='alamat' class="input-sm col-xs-12 col-sm-8 @error('alamat') is-invalid @enderror" maxlength='100' value="{{ old('alamat') }}"/>
                </div>
            </div>
    @error('alamat')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Tanggal Lahir karyawan:</label>
	<div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='date' id='tgl_lahir' name='tgl_lahir' class="input-sm col-xs-12 col-sm-8 @error('tgl_lahir') is-invalid @enderror" maxlength='100' value="{{ old('tgl_lahir') }}"/>
                </div>
            </div>
    @error('tgl_lahir')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>No Telepon Karyawan :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='no_tlp' name='no_tlp' class="input-sm col-xs-12 col-sm-8 @error('no_tlp') is-invalid @enderror" maxlength='100' value="{{ old('no_tlp') }}"/>
                </div>
            </div>
    @error('no_tlp')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Jabatan :</label>
    <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='jabatan' name='jabatan' class="input-sm col-xs-12 col-sm-8 @error('jabatan') is-invalid @enderror" maxlength='100' value="{{ old('jabatan') }}"/>
                </div>
            </div>
    @error('jabatan')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kepala Area (opsional) :</label>
    <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='kepala_area' name='kepala_area' class="input-sm col-xs-12 col-sm-8 @error('kepala_area') is-invalid @enderror" maxlength='100' value="{{ old('kepala_area') }}"/>
                </div>
            </div>
    @error('kepala_area')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Divisi :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <select name='divisi_id' id="divisi_id" >
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
                <input type='text' id='nip' name='nip' class="input-sm col-xs-12 col-sm-8 @error('nip') is-invalid @enderror" maxlength='100' value="{{ old('nip') }}"/>
                </div>
            </div>
    @error('nip')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Email :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='email' name='email' class="input-sm col-xs-12 col-sm-8 @error('email') is-invalid @enderror" maxlength='100' value="{{ old('email') }}"/>
                </div>
            </div>
    @error('email')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Password :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='password' id='password' name='password' class="input-sm col-xs-12 col-sm-8 @error('password') is-invalid @enderror" maxlength='100' value="{{ old('password') }}"/>
                </div>
            </div>
    @error('password')
      <div class="invalid-feedback" >{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Confirm Password :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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