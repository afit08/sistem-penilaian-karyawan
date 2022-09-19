@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM DATA KATEGORI</h4>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class='widget-toolbar'>
	<a href="{{ route('create-kategori') }}" class='btn btn-minier btn-success'><i class='ace-icon glyphicon glyphicon-plus'></i>Add Data</a>
    <a href='#' data-action='collapse'><i class='ace-icon fa fa-chevron-up'></i></a>
	     
    </div>
    </div>
    <div class='widget-body'>
    <div class='widget-main'><table id="dataTable" class='table table-striped table-bordered table-hover'>
    <thead>
    <tr>
    <th width='5%'>No</th>
    <th>Kode Kategori</th>
    <th>Kategori</th>
    <th>Weight/Bobot (%)</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($kategoris as $ka)
    <tr>
    <td><center>{{$loop->iteration}}</center></td>
    <td>{{$ka->kode_kategori}}</td>
    <td>{{$ka->nama_kategori}}</td>
    <td>{{$ka->bobot}}</td>
    <td>
    <center>
          <a class="green" href="{{ url('edit-kategori',$ka->id) }}"><i class='ace-icon fa fa-pencil bigger-130'></i></a> 
          | 
          <a class="red" href="{{ url('delete-kategori',$ka->id) }}"><i class='ace-icon fa fa-trash-o bigger-130'></i></a>
    </center>
    </td>
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
      