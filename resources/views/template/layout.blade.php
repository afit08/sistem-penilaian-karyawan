<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title> Performance Appraisal | PT. Jasa Swadaya Utama </title>

    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
 
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/chosen.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker3.min.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
  <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
  <![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!--[if lte IE 9]>
  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
  <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
    <link href="{{ asset('search/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  </head>

  <body class="no-skin">

    <div id="navbar" class="navbar navbar-default ace-save-state">
      <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <a href="?halamane=beranda" class="navbar-brand"><small>PERFORMANCE APPRAISAL</small></a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">



            <li class="light-blue dropdown-modal">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="{{asset('assets/images/avatars/avatar2.png')}}" alt="Jason's Photo" />
                <span class="user-info">
                  <small>Welcome,</small>
                  {{ Auth::user()->nama_karyawan }}</span>
                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li><a href="#"><i class="ace-icon fa fa-user"></i>Profile</a></li>
                <li class="divider"></li>
                <li>
                <a class="dropdown-item" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="ace-icon fa fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{route('logout')}}" method="GET" class="d-none">
                                        @csrf
                                    </form>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <!-- start .nav-list -->

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try {
          ace.settings.loadState('main-container')
        } catch (e) {}
      </script>

      <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
          try {
            ace.settings.loadState('sidebar')
          } catch (e) {}
        </script>

        <!-- \.nav-list -->
        <ul class="nav nav-list">
          
          <!--LEVEL ADMIN-->
           <!--DASHBOARD-->
@if(auth()->user()->divisi_id=="1")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
         <li class="">
            <a href="{{'tahun-penilaian'}}"><i class="menu-icon fa fa-caret-right"></i>Tahun Penilaian</a><b class="arrow"></b></li>
         <li class="">
            <a href="{{'kategori'}}"><i class="menu-icon fa fa-caret-right"></i>Kategori Kinerja</a><b class="arrow"></b></li>
         <li class="">
            <a href="{{'kompetensi'}}"><i class="Z=" menu-icon fa fa-caret-right"></i>Kompetensi</a><b class="arrow"></b></li>
         <li class="">
            <a href="{{'rating'}}"><i class="menu-icon fa fa-caret-right"></i>Performance Rating</a><b class="arrow"></b></li>
         <li class="">
            <a href="{{'divisi'}}"><i class="menu-icon fa fa-caret-right"></i>Divisi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'mutasi'}}"><i class="menu-icon fa fa-caret-right"></i>Mutasi</a><b class="arrow"></b></li>
          <li class="">
            <a href="{{'transaksi'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif

 @if(auth()->user()->divisi_id=="2")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-finance'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-finance'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-finance'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="3")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-operational'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-operational'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-operational'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="4")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-hr-and-gs-division'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-hr-and-gs-division'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-hr-and-gs-division'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="5")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-2kpno'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-2kpno'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-2kpno'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="6")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-general-affair'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-general-affair'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-general-affair'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="7")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-it'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-it'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-it'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
  
 @if(auth()->user()->divisi_id=="8")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-capem'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-capem'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-capem'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="9")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-hcm'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-hcm'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-hcm'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="10")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-regional-jakarta2'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-regional-jakarta2'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-regional-jakarta2'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
  
 @if(auth()->user()->divisi_id=="11")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-regional-jakarta1'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-regional-jakarta1'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-regional-jakarta1'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
 
 @if(auth()->user()->divisi_id=="12")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-prfs'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-prfs'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-prfs'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
  
 @if(auth()->user()->divisi_id=="13")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-special-division'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-special-division'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-special-division'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
  
 @if(auth()->user()->divisi_id=="14")
 <li class=""><a href="{{''}}"><i class='menu-icon fa fa-home'></i><span class='menu-text'> Home </span></a><b class='arrow'></b></li>
 <!--MASTER-->
 <li class=""><a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-database"></i><span class="menu-text"> Master </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'karyawan-personnel'}}"><i class="menu-icon fa fa-caret-right"></i>Data Karyawan</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Transaksi-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Transaksi </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'transaksi-personnel'}}"><i class="menu-icon fa fa-caret-right"></i>Transaksi</a><b class="arrow"></b></li>
     </ul>
 </li>

 <!--Laporan-->
 <li class="">
    <a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-bar-chart-o"></i><span class="menu-text"> Laporan </span><b class="arrow fa fa-angle-down"></b></a>
     <b class="arrow"></b>
     <ul class="submenu">
         <li class="">
            <a href="{{'laporan-personnel'}}"><i class="menu-icon fa fa-caret-right"></i>Laporan</a><b class="arrow"></b></li>
     </ul>
 </li>

 @endif
        </ul>
        <!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
      </div>

      <!--isi dari halaman conten -->
      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">

            <!--<div class="nav-search" id="nav-search">
  <form class="form-search">
  <span class="input-icon">
  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
  <i class="ace-icon fa fa-search nav-search-icon"></i>
  </span>
  </form>
  </div><!-- /.nav-search -->
          </div>

          <div class="page-content">

            <div class="page-header">

            </div><!-- /.page-header -->

            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                @yield('content') 

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

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
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
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.flash.min.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/buttons.colVis.min.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>

    <!-- ace scripts -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>



    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/spinbox.min.js"></script>

    <script src="assets/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/jquery.knob.min.js"></script>
    <script src="assets/js/autosize.min.js"></script>
    <script src="assets/js/jquery.inputlimiter.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap-tag.min.js"></script>
    <script src="{{ asset('search/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('search/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script> 
    
    <script>
      $(function() {
        $("#dynamic-table1").DataTable();
      });

      //datepicker plugin
      //link
      $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        })
        //show datepicker when clicking on the icon
        .next().on(ace.click_event, function() {
          $(this).prev().focus();
        });

      if (!ace.vars['touch']) {
        $('.chosen-select').chosen({
          allow_single_deselect: true


        });
        //resize the chosen on window resize

        $(window)
          .off('resize.chosen')
          .on('resize.chosen', function() {
            $('.chosen-select').each(function() {
              var $this = $(this);
              $this.next().css({
                'width': $this.parent().width()
              });
            })
          }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
          if (event_name != 'sidebar_collapsed') return;
          $('.chosen-select').each(function() {
            var $this = $(this);
            $this.next().css({
              'width': $this.parent().width()
            });
          })
        });


        $('#chosen-multiple-style .btn').on('click', function(e) {
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
          else $('#form-field-select-4').removeClass('tag-input-style');
        });

        /////////
        $('#modal-form input[type=file]').ace_file_input({
          style: 'well',
          btn_choose: 'Drop files here or click to choose',
          btn_change: null,
          no_icon: 'ace-icon fa fa-cloud-upload',
          droppable: true,
          thumbnail: 'large'
        });

        /////////Custom File Input
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
          no_file: 'No File ...',
          btn_choose: 'Choose',
          btn_change: 'Change',
          droppable: false,
          onchange: null,
          thumbnail: false //| true | large
          //whitelist:'gif|png|jpg|jpeg'
          //blacklist:'exe|php'
          //onchange:''
          //
        });

      }
    </script>
  </body>

  </html>

