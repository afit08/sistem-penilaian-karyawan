@extends('template/layout')

@section('content')
  <div class="row">
  <div class="col-sm-6">
  <div class="widget-box">
  <div class="widget-header">
  <h4 class="widget-title">REKAP DATA TRANSAKSI</h4>

  <span class="widget-toolbar">
  <a href="#" data-action="collapse">
  <i class="ace-icon fa fa-chevron-up"></i>
  </a>
  </span>
  </div>

  <div class="widget-body">
  <div class="widget-main">

	<table class='table-list' width='100%' border='0' cellspacing='1' cellpadding='2'>
    <thead>
    <tr>
	<td bgcolor='#F5F5F5'>No.</td>
    <td bgcolor='#F5F5F5'>NIP</td>
    <td bgcolor='#F5F5F5' width='20%'>Nama Karyawan</td>
    <td bgcolor='#F5F5F5'>Kepala Area Pinbag</td>
    <td bgcolor='#F5F5F5'>Hasil</td>
    <td bgcolor='#F5F5F5'>Nilai</td>
    </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
    @php $i=1 @endphp
    @foreach($mutasi as $item)
    <tr>
    <td class='center'>{{$i++}}</td>
    <td class='center'>{{$item->nip}}</td>
    <td class='center'>{{$item->nama_karyawan}}</td>
    <td class='center'>{{$item->kepala_area}}</td>
    <td class='center'>{{$item->nama_tahun_penilaian}}</td>
    @foreach($transaksi as $item)
    <td class='center'><?php $hasil = $item->score ?></td>
    <?php $total += $hasil ?>
    @endforeach
    @endforeach
    <td class='center'><?php echo $total ?></td>
    </tr>
	</tbody>
    </table>	

  <div class="mb-3">
            <label for="formFile" class="form-label">Kode Barang Akhir</label>
            <input class="form-control" type="text" id="tahun" name="tahun">
        </div>

    <br><br>

    <div class='form-actions'>
    <a href="" onclick="this.href='/laporan-tahun/'+document.getElementById('tahun').value" target="_blank" class="btn btn-primary btn-block"><i class='ace-icon fa fa-check bigger-110'></i>Submit</a>                  
    </div>

    <a href="{{('laporan-tahun')}}">tampilkan</a>
   
  </div>
  </div>
  </div>
  </div>

  

  
  </div>

  @endsection 