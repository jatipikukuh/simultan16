<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Peraturan</title>

    <!-- Bootstrap -->
 <!--   <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('home') }}">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp Beranda
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('user')}}">Profil</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('auth/logout') }}">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- end navbar -->

    <br><br><br><br><br>
    <div class="row">
      <div class="col-md-7 col-md-offset-1">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Peraturan Simultan 2016</h3>
          </div>
          <div class="panel-body">
          <h4>Seluruh peserta wajib memenuhi peraturan SIMULTAN 2016 sejak membeli tiket sampai acara usai.</h4>
          <ol>
            <li>Peserta memakai baju bebas sopan (berkerah, dilarang menggunakan kaos oblong, dan dilarang menggunakan sandal jepit),</li>
            <li>Membawa alat tulis (Pensil 2B, Penghapus, papan kerja, rautan, dan penggaris),</li>
            <li>Datang maksimal pukul 06.45 WIB,</li>
            <li>Membawa kartu peserta SIMULTAN 2016,</li>
            <li>Bagi peserta SIMULTAN 2016 yang membawa kendaraan pribadi harap menunjukkan STNK sebelum keluar area,</li>
            <li>Dilarang membawa senjata tajam atau barang atau obat-obatan terlarang ke lokasi acara,</li>
            <li>Peserta wajib membawa kartu NIS/NISN yang di gunakan untuk mengisi biodata,</li>
            <li>Peserta dilarang melakukan tindakan kerjasama dan atau melihat pekerjaan teman sewaktu melaksanakan ujian Simulasi SBMPTN,</li>
            <li>Peserta yang tidak memiliki / membawa kartu Peserta atau kartu NIS/NISN yang di gunakan untuk mendaftar tidak di perkenankan masuk,</li>
            <li>Background Foto berwarna merah atau biru.</li>
          </ol>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-md-offset-0">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">More Info</h3>
          </div>
          <div class="panel-body">
            <br>

            <div class="row">
              <div class="col-md-3">
                <a href="https://www.facebook.com/groups/397533683705069/?fref=nf"><img src="{{ URL::asset('content/fb.jpg') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a href="https://www.twitter.com/kamagamapwr"><img src="{{ URL::asset('content/twit.png') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a href="https://www.instagram.com/kamagamapwr/"><img src="{{ URL::asset('content/insta.png') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="{{ URL::asset('content/line.png') }} " style="height:50px; width:50px; "></a>
              </div>
            </div><br><br>
            <p class="text-center" style="margin-bottom: -20px;font-size:50px;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></p>
            <h4 class="text-center">0823-1462-9703 (Rahma)</h4>
            <p class="text-center" style="margin-bottom: -20px;font-size:50px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></p>
            <h4 class="text-center"><a href="mailto:kgmpwr@gmail.com">kgmpwr@gmail.com</a></h4>
            <br>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Supported by</h3>
          </div>
          <div class="panel-body">
            <!-- iklan ning kene -->
            <div class="text-center">
<!--              <a href="#">
                <img src="{{ URL::asset('content/bankBri.png') }}" style="height:50%; width:50%;" class="img-responsive" alt="iklan1">
              </a>
              <br>
              <a href="#">
                <img src="{{ URL::asset('content/primagama.jpg') }}" style="height:80%; width:80%;" class="img-responsive" alt="iklan1">
              </a>-->
            </div>

            <!-- iklan ning kene end -->
          </div>
        </div>
    </div>
    <br><br><br><br>
  </div>
      <!-- footer di sini -->
    <div class="row footers">
    <br>
      <div class="col-md-8 col-md-offset-2 text-center">
      <a href="http:://www.ugm.ac.id/"><img src="{{ URL::asset('content/ugm.png') }}"  style="height:10%; width:8% "></a>&nbsp&nbsp&nbsp
      <img src="{{ URL::asset('content/kamagama.png') }}" style="height:10%; width:8%; ">
      </div>
      <br><br>
    </div>
    <!-- endfooter di sini -->

    <!-- end modal e ning kene -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>