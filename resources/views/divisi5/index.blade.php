@extends('template/layout')

@section('content')
{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
    @if(auth()->user()->jabatan=="Kepala Divisi")
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
    @endif
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/karyawan-finance/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>

    @if(auth()->user()->jabatan=="Kepala Divisi")
    <a href="/karyawan-finance/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    @endif

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'> 
    <div class='widget-header'>
    <h4 class='widget-title'>FORM DATA KARYAWAN</h4>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class='widget-toolbar'>
    @if(auth()->user()->jabatan=="Kepala Divisi")
	  <a href="{{ route('create-karyawan-finance') }}" class='btn btn-minier btn-success'><i class='ace-icon glyphicon glyphicon-plus'></i>Add Data</a>
    @endif
    <a href='#' data-action='collapse'><i class='ace-icon fa fa-chevron-up'></i></a>
	     
    </div>
    </div>
    <div class='widget-body'>
    <div class='widget-main'><table id="dataTable" class='table table-striped table-bordered table-hover'>
    <thead>
    <tr>
    <th width='5%'>No</th>
    <th>NIP</th>
    <th>Nama karyawan</th>
    <th>Divisi</th>
    <th>Kepala Area</th>
    <th>Jabatan</th>
    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($user as $u)
    <tr>
    <td><center>{{ $i++ }}</center></td>
    <td>{{$u->nip}}</td>
    <td>{{$u->nama_karyawan}}</td>
    <td>{{$u->Divisi->divisi}}</td>
    <td>{{$u->kepala_area}}</td>
    <td>{{$u->jabatan}}</td>       
    <td>
    <center>
          <a class="blue" href="{{ url('detail-karyawan-finance',$u->id) }}"><i class="fa fa-eye bigger-130" aria-hidden="true"></i></a>
          @if(auth()->user()->jabatan=="Kepala Divisi")
          |
          <a class="green" href="{{ url('edit-karyawan-finance',$u->id) }}"><i class='ace-icon fa fa-pencil bigger-130'></i></a> 
          | 
          <a class="red" href="{{ url('delete-karyawan-finance',$u->id) }}"><i class='ace-icon fa fa-trash-o bigger-130'></i></a>
          @endif
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
      