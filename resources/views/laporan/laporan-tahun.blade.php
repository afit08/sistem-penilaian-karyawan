<html>
<head>
<title> REKAPITULASI PENILAIAN PRESTASI KARYAWAN</title>
 
<link href="halaman/hal_report/styles_cetak.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="display: flex;
  flex-wrap: wrap;
  text-align: center;">
  <img style="display:relative;" src="assets/images/dashboard_logo.png" width="100" height="100">
  <div>
	<h2> REKAPITULASI PENILAIAN PRESTASI KARYAWAN </h2>
</div>
</div>
	
	<table class='table-list' width='100%' border='0' cellspacing='1' cellpadding='2'>
    <thead>
    <tr>
	<td bgcolor='#F5F5F5'>No.</td>
    <td bgcolor='#F5F5F5'>NIP</td>
    <td bgcolor='#F5F5F5' width='20%'>Nama Karyawan</td>
    <td bgcolor='#F5F5F5'>Posisi Pegawai</td>
    <td bgcolor='#F5F5F5'>Kepala Area Pinbag</td>
    <td bgcolor='#F5F5F5'>Nilai</td>
    <td bgcolor='#F5F5F5'>Hasil</td>
    </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
    @php $i=1 @endphp
    @foreach($mutasi as $item)
    @foreach($kategori as $ka)
    <tr>
    <td class='center'>{{$i++}}</td>
    <td class='center'>{{$item->User->nip}}</td>
    <td class='center'>{{$item->User->nama_karyawan}}</td>
    <td class='center'>{{$item->User->kepala_area}}</td>
    <td class='center'>{{$item->TahunPenilaian->nama_tahun_penilaian}}</td>
    <td>{{$ka->bobot}}</td>
    @foreach($transaksi as $tr)
    <?php $hasil = $ka->bobot * $tr->nilai1 + $tr->nilai2 + $tr->nilai3 + $tr->nilai4; ?>
    @endforeach
    <?php $total += $hasil ?>
    @endforeach 
    @endforeach
    <td class='center'><?php echo $total ?></td>
    <td class="center">
    <?php
       $total;
       if ($total < 50 ) {
        echo "Kurang";
       }elseif ($total < 60){
        echo "Cukup";
       }elseif ($total < 85){
        echo "Baik";
       }else{
        echo "Istimewa";
       }
      ?>
    </td>
	</tbody>
    </table>	
    </body>
	</html>
	