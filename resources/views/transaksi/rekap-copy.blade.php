@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    @foreach($mutasi as $mu)
    <h4 class='widget-title'>Form Penilaian : {{$mu->User->nama_karyawan}} # {{$mu->TahunPenilaian->nama_tahun_penilaian}} </h4>
    @endforeach
    
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

    <table id="dataTable" class='table table-striped table-bordered table-hover'>
    <thead>
    <tr>
    <th width='5%'><center>No</center></th>
    <th><center>Kriteria Kinerja</center></th>
    <th><center>Nilai (00-49) : Kurang</center></th>
    <th><center>Nilai (50-59) : Cukup</center></th>
    <th><center>Nilai (60-84) : Baik</center></th>
    <th><center>Nilai (>85) : Istimewa</center></th>
    <th><center>Bobot (%)</center></th>
    <th><center>Score Test / Skor</center></th>
    </tr>
    </thead>
    <tbody>
    <form class='form-horizontal' method="POST" action="{{ route('save-transaksi') }}">
    {{ csrf_field() }}
    @php $i=1 @endphp
    @foreach($transaksi as $item)
    <tr>
    <td class='center'>{{ $i++ }}</td>
    <td bgcolor="#DCDCDC">{{ $item->Kategori->nama_kategori }}</td>
    <td><center></center></td>
    <td><center></center></td>
    <td><center></center></td>
    <td><center></center></td>
    <td><center>{{ $item->Kategori->bobot }}</center></td>
    <td><center></center></td>
    </tr>
    @foreach($item->Kategori->kompetensis as $ko)
    <tr>
    <td></td>
    <td>
      {{$ko->nama_kompetensi}}
    </td>
    <input type="hidden" name="mutasi_id" value="{{ $item->mutasi_id }}">
    <input type="hidden" name="kategori_id" value="{{ $item->kategori_id }}">
    <input type="hidden" name="rating_id" value="{{ $item->rating_id }}">
    <td><center><input type="text" name="nilai1"></center></td>
    <td><center><input type="text" name="nilai2"></center></td>
    <td><center><input type="text" name="nilai3"></center></td>
    <td><center><input type="text" name="nilai4"></center></td>
    <td></td>
    <td></td>
    </tr>
    @endforeach
    @endforeach
    <tr>
    <th colspan='6'>TOTAL SCORE</th>
    <th><center>{{$item->Kategori->sum('bobot')}}</center></th>
   </tr>
   <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </tbody>
    </table>
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
      