<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('storeTransaksi')}}" method="POST" oninput="x.value=parseInt(myInput1.value)+parseInt(myInput2.value)+parseInt(myInput3.value)+parseInt(myInput4.value)">
@for($x=0; $x <1; $x++)

@php
    $strNilai1 = isset($transaksi[$x]) ? $transaksi[$x]->nilai1:'';
    $strNilai2 = isset($transaksi[$x]) ? $transaksi[$x]->nilai2:'';
    $strNilai3 = isset($transaksi[$x]) ? $transaksi[$x]->nilai3:'';
    $strNilai4 = isset($transaksi[$x]) ? $transaksi[$x]->nilai4:'';
    $strMutasiId = isset($transaksi[$x]) ? $transaksi[$x]->mutasi_id:'';
    $strKategoriId = isset($transaksi[$x]) ? $transaksi[$x]->kategori_id:'';
@endphp
                                    <input type="hidden" name="id[]" >
                                    <div class="row mb-4">
                                        <input name="mutasi_id[]" type="hidden" class="form-control"  >
                                        <input name="kategori_id[]" type="hidden" class="form-control"  >

                                        <div class="col-sm-2">
                                            <input name="nilai1[]" type="text" class="form-control" id="myInput1" oninput="myFunction()">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai2[]" type="text" class="form-control" id="myInput2" oninput="myFunction()">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai3[]" type="text" class="form-control" id="myInput3" oninput="myFunction()">
                                        </div>

                                        <div class="col-sm-2">
                                            <input name="nilai4[]" type="text" class="form-control" id="myInput4" oninput="myFunction()">
                                        </div>

                                        <output name="x" for="myInput1 myInput2 myInput3 myInput4"></output>
                                    </div>
                                    @endfor
</form>
                                    
                            
</body>
</html>