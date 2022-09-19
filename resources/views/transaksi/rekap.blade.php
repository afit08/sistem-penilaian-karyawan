@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    @foreach($mutasi as $mu)
    <h4 class='widget-title'>Form Penilaian : {{$mu->User->nama_karyawan}} # {{$mu->TahunPenilaian->nama_tahun_penilaian}} </h4>
    @endforeach

    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'><i class='ace-icon fa fa-chevron-up'></i></a>
	     
    </div>
    </div>
    <div class='widget-body'>
    <div class='widget-main'>
    <form action="{{route('save-transaksi')}}" method="POST">
    {{csrf_field()}}

    @foreach($mutasi as $mu)
        <input type="hidden" name="mutasi_id" value="{{$mu->id}}">
    @endforeach

    @foreach($transaksi as $tr)
        <input type="hidden" name="id[]" value="{{$tr->id}}">
    @endforeach

    @if (session('error') === '')
        <div class="mt-2 alert alert-success">
            <i class="link-icon" data-feather="check-circle"></i> Berhasil menyimpan data!
        </div>
    @elseif(session('error') == 1)
        <div class="mt-2 alert alert-danger">
            <i class="link-icon" data-feather="alert-circle"></i> Gagal saat mencoba menyimpan data, silahkan coba kembali!
        </div>
    @endif

    <table class='table table-striped table-bordered table-hover'>
    <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Pelajaran</th>
                                    <th colspan="5" class="text-center">Data Nilai</th>
                                </tr>
                                <tr>
                                    <th>Semester 1</th>
                                    <th>Semester 2</th>
                                    <th>Semester 3</th>
                                    <th>Semester 4</th>
                                </tr>
                                </thead> 
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($kategoris as $ka)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$ka->nama_kategori}}</td>
                                    </tr>
                                @foreach($ka->kompetensis as $index => $val)
                                    <tr>
                                        <td></td>
                                        <td>{{$val->nama_kompetensi}}</td>
                                    <input type="hidden" name="kompetensi_id[]" value="{{$val->id}}">
                                        <td><input name="n1[]" class="form-control" type="text" value="{{(isset($transaksi[$index]->nilai1)) ? $transaksi[$index]->nilai1 : 0}}"></td>
                                        <td><input name="n2[]" class="form-control" type="text" value="{{(isset($transaksi[$index]->nilai2)) ? $transaksi[$index]->nilai2 : 0}}"></td>
                                        <td><input name="n3[]" class="form-control" type="text" value="{{(isset($transaksi[$index]->nilai3)) ? $transaksi[$index]->nilai3 : 0}}"></td>
                                        <td><input name="n4[]" class="form-control" type="text" value="{{(isset($transaksi[$index]->nilai4)) ? $transaksi[$index]->nilai4 : 0}}"></td>
                                    </tr>
                                @endforeach
                                @endforeach
                                </tbody>

    </table>
    <div class="mt-1">
                                <button type="submit" class="btn btn-sm btn-danger me-2 mb-2">
                                    <i class="btn-icon-prepend" data-feather="link"></i>
                                    Simpan Nilai
                                </button>
                                </form>
                            </div>
    </div><!-- PAGE CONTENT ENDS -->
	</div>
    </div>
    </div>
    </div><!-- /.span -->
    <div style='margin:15px;'>
    <h4>Keterangan:<br></h4>
    <span>00 - 49 : Kurang<br></span>
    <span>50 - 59 : Cukup<br></span>
    <span>60 - 84 : Baik<br></span>
    <span>>85 : Istimewa<br></span>
    </div>
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
      