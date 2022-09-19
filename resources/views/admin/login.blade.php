@extends('template/login')

@section('content')
<div class="position-relative">
	<div id="login-box" class="login-box visible widget-box no-border">
	    <div class="widget-body">
	        <div class="widget-main">
	            <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-key green"></i>
	                    Masuk Dengan Akun Anda
	            </h4>

	                <div class="space-6"></div>

                    <form method="POST" action="{{ route('postlogin') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
	                    <div class="space"></div>

	                    <div class="clearfix">
	                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
	                            <i class="ace-icon fa fa-key"></i>
	                            <span class="bigger-110">{{ __('Login') }}</span>
	                        </button>
	                    </div>

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
@endsection
