<!DOCTYPE html>
	<html lang="en">

	<head>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    <meta charset="utf-8" />
	    <title>Register System</title>

	    <meta name="description" content="User login page" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	    <!-- bootstrap & fontawesome -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	    <!-- text fonts -->
	    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	    <!-- ace styles -->
	    <link rel="stylesheet" href="assets/css/ace.min.css" />

	    <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
        <![endif]-->
	    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	    <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

	    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	    <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="login-layout blur-login">
	    <div class="main-container">
	        <div class="main-content">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1">
	                    <div class="login-container">
	                        <div class="center">
	                            <h2>
	                                <i class="ace-icon fa fa-money blue"></i>
	                                <span class="red">PT</span>
	                                <span class="white" id="id-text2"> JASA SWADAYA UTAMA</span>
	                            </h2>
	                            	                        </div>

	                        <div class="space-6"></div>

	                        <div class="position-relative">
	                            <div id="login-box" class="login-box visible widget-box no-border">
	                                <div class="widget-body">
	                                    <div class="widget-main">
	                                        <h4 class="header blue lighter bigger">
	                                            <i class="ace-icon fa fa-key green"></i>
	                                            Register Akun Anda
	                                        </h4>

	                                        <div class="space-6"></div>

                                            <form method="POST" action="{{ route('simpanregistrasi') }}">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Kode Karyawan') }}</label>
                                                    <input id="kode_karyawan" type="text" class="form-control @error('kode_karyawan') is-invalid @enderror" name="kode_karyawan" value="{{ old('kode_karyawan') }}" required autocomplete="kode_karyawan" autofocus>
                                                    @error('kode_karyawan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Nama Karyawan') }}</label>
                                                    <input id="nama_karyawan" type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" name="nama_karyawan" value="{{ old('nama_karyawan') }}" required autocomplete="nama_karyawan" autofocus>

                                                    @error('nama_karyawan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Alamat') }}</label>
                                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                                        @error('alamat')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
 
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Tanggal Lahir') }}</label>
                                                        <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus>

                                                        @error('tgl_lahir')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Nomor Telepon') }}</label>
                                                        <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" required autocomplete="no_tlp" autofocus>

                                                        @error('no_tlp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Jabatan') }}</label>
                                                        <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" autofocus>

                                                        @error('jabatan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Kepala Area') }}</label>
                                                        <input id="kepala_area" type="text" class="form-control @error('kepala_area') is-invalid @enderror" name="kepala_area" value="{{ old('kepala_area') }}" required autocomplete="kepala_area" autofocus>

                                                        @error('kepala_area')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="Select">{{ __('Divisi') }}</label>
                                                    <select id="divisi_id" name="divisi_id" class="form-control">
                                                    @foreach ($divisi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->divisi }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                        
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('NIP') }}</label>
                                                        <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

                                                        @error('nip')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Email') }}</label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">{{ __('Confirm Password') }}</label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary" style="margin-left: 38px; margin-bottom: 30px; width:290px;">
                                                    {{ __('Register') }}
                                                </button>
                                            </form>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            <center>
                                                <div>
                                                    <a class="forgot-password-link">
                                                        2022 &copy; <a class="white" target='_blank'>XYZA Team</a>
                                                    </a>
                                                </div>
                                            </center>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->
                            </div><!-- /.position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
jQuery(function($) {
$(document).on('click', '.toolbar a[data-target]', function(e) {
e.preventDefault();
var target = $(this).data('target');
$('.widget-box.visible').removeClass('visible'); //hide others
$(target).addClass('visible'); //show target
});
});



//you don't need this, just used for changing background
jQuery(function($) {
$('#btn-login-dark').on('click', function(e) {
$('body').attr('class', 'login-layout');
$('#id-text2').attr('class', 'white');
$('#id-company-text').attr('class', 'blue');

e.preventDefault();
});
$('#btn-login-light').on('click', function(e) {
$('body').attr('class', 'login-layout light-login');
$('#id-text2').attr('class', 'grey');
$('#id-company-text').attr('class', 'blue');

e.preventDefault();
});
$('#btn-login-blur').on('click', function(e) {
$('body').attr('class', 'login-layout blur-login');
$('#id-text2').attr('class', 'white');
$('#id-company-text').attr('class', 'light-blue');

e.preventDefault();
});

});
</script>
</body>

</html>