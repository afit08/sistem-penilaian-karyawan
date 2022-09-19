@extends('template/layout')

@section('content')
<div class="row">
	<div class='col-xs-12'>
    <div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
    <i class="ace-icon fa fa-times"></i>
    </button>
	
	<p><strong>
			
    <span class="black"><script language=JavaScript>var d = new Date();
    var h = d.getHours();
    if (h < 11) { document.write('Selamat pagi {{auth()->user()->name}},'); }
    else { if (h < 15) { document.write('Selamat siang {{auth()->user()->name}},'); }
    else { if (h < 19) { document.write('Selamat sore {{auth()->user()->name}},'); }
    else { if (h <= 23) { document.write('Selamat malam {{auth()->user()->name}},'); }
    }}}</script></span></strong>
	Silahkan pilih menu yang tersedia untuk mengelola konten ini
	</p>
	
	<p>Download manual book pengguna sistem</p>
	<p><button class="btn btn-sm btn-success">Download</button></p>
    </div>
    </div>
    </div><!-- /.row -->
            
@endsection
