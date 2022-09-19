@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM DATA MUTASI</h4>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'><i class='ace-icon fa fa-chevron-up'></i></a>

    </div>
    </div>
    <div class='widget-body'>
    <div class='widget-main'>
    <form class='form-horizontal' method="POST" action="{{ route('save-mutasi') }}">
    {{ csrf_field() }} 

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Nama Karyawan :</label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    <select name='user_id' id="user_id" >
    @foreach ($user as $item)
    <option value="{{ $item->id }}">{{ $item->nama_karyawan }}</option>
    @endforeach
    </select>
    </div>
    </div>
    </div>

    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'></label>
	<div class='col-xs-12 col-sm-9'>
    <div class='clearfix'>
    @foreach($tahun_penilaian as $tp)
        <input class="form-check-input" type="checkbox" value="{{ $tp->id }}" id="tahun_penilaian_id" name="tahun_penilaian_id">
          {{ $tp->nama_tahun_penilaian }}
      @endforeach
    </div>
    </div>
    </div>


    <div class='form-actions'>
    <button class='btn btn-info' type='submit'>
    <i class='ace-icon fa fa-check bigger-110'></i>
    Submit
    </button>
                               
    </div>
    </form>
    
      <table id="dataTable" class='table table-striped table-bordered table-hover'>
    <thead>
    <tr>
    <th><center>Nama Karyawan</center></th>
    <th><center>Tahun Penilaian</center></th>
    <th><center>Aksi</center></th>
    <th></th>
    </tr>
    </thead>
    <tbody>
      @foreach ($mutasi as $item)
    <tr>
    <td><center>{{$item->User->nama_karyawan}}</center></td>
    <td><center>{{$item->TahunPenilaian->nama_tahun_penilaian}}</center></td>
    <td><center><a class="red" href="{{ url('delete-mutasi',$item->id) }}"><i class='ace-icon fa fa-trash-o bigger-130'></i></a></center></td>
    </tr>
    @endforeach
    </tbody>
    </table>
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
      </div>
@endsection 
      