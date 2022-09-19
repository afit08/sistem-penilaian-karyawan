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
                                    <th rowspan="2" class="text-center">No</th>
                                    <th rowspan="2" class="text-center">Nama Pelajaran</th>
                                    <th colspan="5" class="text-center">Data Nilai</th>
                                    <th rowspan="2" class="text-center">Bobot(%)</th>
                                    <th rowspan="2" class="text-center">Score Test / Skor</th>
                                </tr>
                                <tr>
                                    <th><center>Nilai (00-49) : Kurang</center></th>
                                    <th><center>Nilai (50-59) : Cukup</center></th>
                                    <th><center>Nilai (60-84) : Baik</center></th>
                                    <th><center>Nilai (>85) : Istimewa</center></th>
                                </tr>
                                </thead> 
                                <tbody>
                                <?php $total = 0 ?>
                                @php $i=1 @endphp
                                @foreach($kategoris as $ka)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><b>{{$ka->nama_kategori}}</b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @foreach($transaksi as $item)
                                @foreach($ka->kompetensis as $ko)
                                    <tr>
                                        <td></td>
                                        <td>{{$ko->nama_kompetensi}}</td>
                                        <td class="text-center">{{$item->nilai1}}</td>
                                        <td class="text-center">{{$item->nilai2}}</td>
                                        <td class="text-center">{{$item->nilai3}}</td>
                                        <td class="text-center">{{$item->nilai4}}</td>
                                        <td></td>
                                        <td class="text-center">{{$ka->bobot}}</td>
                                        <td class="text-center"><?php echo $hasil = $ka->bobot * $item->nilai1 + $item->nilai2 + $item->nilai3 + $item->nilai4; ?></td>
                                    </tr>
                                @endforeach
                                @endforeach
                                <?php $total += $hasil ?>
                                @endforeach
                                <tr>
                                    <th colspan='7'>TOTAL SCORE</th>
                                    <th><center>{{$ka->sum('bobot')}}</center></th>
                                    <th><center>
                                        <?php
                                        echo $total;
                                        if ($total < 50 ) {
                                            echo " - Kurang";
                                        }elseif ($total < 60){
                                            echo " - Cukup";
                                        }elseif ($total < 85){
                                            echo " - Baik";
                                        }else{
                                            echo " - Istimewa";
                                        }
                                        ?>
                                        </center></th>
                                </tr>
                                </tbody>

    </table>
    <div class="mt-1">
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
      