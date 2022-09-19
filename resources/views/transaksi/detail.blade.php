@extends('template/layout')

@section('content')
<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    @foreach($mutasi as $m)
    <h4 class='widget-title'>Form Penilaian : {{ $m->User->nama_karyawan }} #{{ $m->TahunPenilaian->nama_tahun_penilaian }}</h4>
    @endforeach
    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'>
    <i class='ace-icon fa fa-chevron-up'></i>
    </a>
    </div>
    </div>
    <div class='widget-body'>
    <div class='widget-main'>
    <div class='row'>
      <table border='1' class='table table-bordered'>
	<tr>
    <th>NO</th>
    <th class='center'>KRITERIA KINERJA</th>
    <th>Rating</th>
    <th class='center'>Bobot  (%)</th>
  </tr>
    @php $i=1 @endphp
    @foreach($kategoris as $ka)
    <tr>
    <td rowspan="2" class='center'>{{$i++}}</td>
    <td bgcolor='#F5F5F5'>
      <strong>
        {{$ka->nama_kategori}}
      </strong>
    </td>
    <td>
    @foreach ($mutasi as $item)
    {{ $item->rating->keterangan }}
    @endforeach 
    </td>
    <td><center>{{$ka->bobot}}</center></td>
    </tr>
    @foreach($ka->kompetensis as $ko)
    <tr>
    <td></td>
    <td>
      {{$ko->nama_kompetensi}}
    </td>
    <td></td>
    <td></td>
    </tr>
    @endforeach
    @endforeach
    <tr>
    <th colspan='2'>TOTAL SCORE</th>
    <th class='center'></th>
    <th class='center'>{{$ka->sum('bobot')}}</th>
   </tr>
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
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
      <!--Akhir isi dari halaman conten -->

      <div class="footer">
        <div class="footer-inner">
          <div class="footer-content">
            <span class="bigger-120">
              <span class="blue bolder">2022 &copy; <a target='_blank'>XYZA Team</a></span>
            </span>

          </div>
        </div>
      </div>
@endsection 
      