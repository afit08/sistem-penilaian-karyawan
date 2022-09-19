<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-4">
                        <h6>Daftar Transaksi</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-12"><p>Silahkan isi nilai berdasarkan nama dan tingkat jika ada!</p></div>
                    </div>

                    <div class="row">
                        <form action="{{route('storeTransaksi')}}" method="POST">
                            {{csrf_field()}}
                            @if (session('error') === '')
                                <div class="mt-2 alert alert-success">
                                    <i class="link-icon" data-feather="check-circle"></i> Berhasil menyimpan data!
                                </div>
                            @elseif(session('error') == 1)
                                <div class="mt-2 alert alert-danger">
                                    <i class="link-icon" data-feather="alert-circle"></i> Gagal saat mencoba menyimpan data, silahkan coba kembali!
                                </div>
                            @endif

                            <div class="grid-container">
                            <div>
                            </div>

                            <div>
                            @for($x=0; $x <12; $x++)

                            @php
                                $strNilai1 = isset($transaksi[$x]) ? $transaksi[$x]->nilai1:'';
                                $strNilai2 = isset($transaksi[$x]) ? $transaksi[$x]->nilai2:'';
                                $strNilai3 = isset($transaksi[$x]) ? $transaksi[$x]->nilai3:'';
                                $strNilai4 = isset($transaksi[$x]) ? $transaksi[$x]->nilai4:'';
                                $strMutasiId = isset($transaksi[$x]) ? $transaksi[$x]->mutasi_id:'';
                                $strKategoriId = isset($transaksi[$x]) ? $transaksi[$x]->kategori_id:'';
                            @endphp
                                    <input type="hidden" name="id[]" value="{{$transaksi[$x]->id??0}}">
                                    <div class="row mb-4">
                                        <input name="mutasi_id[]" type="hidden" class="form-control" value="{{$strMutasiId}}" >
                                        <input name="kategori_id[]" type="hidden" class="form-control" value="{{$strKategoriId}}" >
                                
                                        <div class="col-sm-2">
                                            <input name="nilai1[]" type="text" class="form-control" id="myInput1" value="{{$strNilai1}}">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai2[]" type="text" class="form-control" id="myInput2" value="{{$strNilai2}}">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai3[]" type="text" class="form-control" id="myInput3" value="{{$strNilai3}}">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai4[]" type="text" class="form-control" id="myInput4" value="{{$strNilai4}}">
                                        </div>

                                    </div>
                                    
                            @endfor
                            </div>
                            </div>

                            <div class="mt-1">
                                <button type="submit" class="btn btn-sm btn-danger me-2 mb-2">
                                    <i class="btn-icon-prepend" data-feather="link"></i>
                                    Simpan Semua Nilai
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



</body>
</html>