<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simulasi Ujian Seleksi Bersama Masuk Perguruan Tinggi Negeri tahun 2016">
    <meta name="author" content="SIMULTAN 2016">
    <meta name="name" content="SIMULTAN 2016">
    <title>SIMULTAN 2016</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/grayscale.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp  BERANDA
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#info">INFO</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#daftar">Cara Daftar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimoni">Testimoni</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#kontak">Kontak Admin</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                    	<a class="page-scroll" href="{{ url('/auth/login') }}">LOGIN</a>
                    </li>
                    @else
          						<li class="dropdown">
          							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Saya, <span class="caret"></span></a>
          							<ul class="dropdown-menu" role="menu">
          								<li><a href="{{ url('/auth/edit') }}">Edit</a></li>
          							</ul>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
          						</li>
          					@endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @yield('content')
    
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/grayscale.js') }}"></script>
</body>
</html>
