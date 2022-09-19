@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM DATA TRANSAKSI</h4>

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
    <div class='widget-main'><table id="dataTable" class='table table-striped table-bordered table-hover'>
    <thead>
    <tr>
    <th width='5%'><center>No</center></th>
    <th><center>Nama Karyawan</center></th>
    <th><center>Tahun Penilaian</center></th>
    <th><center>Aksi</center></th>
    </tr>
    </thead>
    <tbody>
    @foreach($mutasi as $mu)
    <tr>
    <td><center>{{$loop->iteration}}</center></td>
    <td><center>{{ $mu->User->nama_karyawan }}</center></td>
    <td><center>{{ $mu->TahunPenilaian->nama_tahun_penilaian }}</center></td>
    <td>
      <center>
      @if($mu->status == 1)
      <a href="{{ url('rekap-transaksi',$mu->id) }}" type="button" class="btn btn-primary btn-sm">Rekaptulasi</a>
      |
      @endif
      <a href="{{ url('detail-rekap-transaksi',$mu->id) }}" type="button" class="btn btn-success btn-sm">Detail Rekaptulasi</a>
      @if(auth()->user()->jabatan=="Kepala Divisi")
      |
      @if($mu->status == 1)
        <a href="{{ route('mutasi.status.update',['mutasi_id' => $mu->id,
          'status_code' => 0]) }}" class="btn btn-danger m-2">
          <i class="fa fa-ban"></i>
        </a>
        @else
        <a href="{{ route('mutasi.status.update',['mutasi_id' => $mu->id,
          'status_code' => 1]) }}" class="btn btn-primary m-2" style="pointer-events:none;">
          <i class="fa fa-check"></i>
        </a>
        @endif
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
      <script>
function myFunction() {
    var x = document.getElementById("Btn");
    x.disabled = true;
}
</script>
@endsection 
      