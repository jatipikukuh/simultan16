<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kartu Peserta</title>

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
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp <b>BERANDA</b>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('rule') }}">Peraturan</a></li>
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
            <h3 class="panel-title">Kartu Peserta</h3>
          </div>
          <div class="panel-body">
            <br><br>
            <div class="row" id="dvContents">
              <div class="col-md-10 col-md-offset-1">
              @foreach($cu as $uc)
              <div class="text-center">
              <img src="{{URL::asset('uploads')}}/{{ $uc->image }}" style="border: 3px solid black; height:200px;width:150px;"><br><br>
              </div>
                    <table class="table table-stripped">
                      <tr>
                        <td>Nama</td>
                        <td class="kapital">{{ $uc->nama_lengkap }}</td>
                      </tr>
                      <tr>
                        <td>Nomor Peserta</td>
                        <td class="kapital">2016-{{ $nomor_tengah }}-{{ $uc->nomor_peserta }}</td>
                      </tr>
                      <tr>
                        <td>NIS</td>
                        <td class="kapital">{{ $uc->nomor_induk_siswa }}</td>
                      </tr>
                      <tr>
                        <td>Ruang</td>
                        <td class="kapital">{{ $ruang }}</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td class="kapital">{{ $uc->alamat }}</td>
                      </tr>
                      <tr>
                        <td>Sekolah</td>
                        <td class="kapital">{{ $uc->asal_sekolah }}</td>
                      </tr>
                    </table>
                    <h4>Perguruan Tinggi</h4>
                    <table class="table table-stripped">
                      <tr>
                        <td>Pilihan</td>
                        <td class="kapital">{{ $uc->pilihan }}</td>
                      </tr>
                      <tr>
                        <td>Jurusan/Prodi 1</td>
                        <td class="kapital">{{ $uc->jurusan_1 }}</td>
                      </tr>
                      <tr>
                        <td>Jurusan/Prodi 2</td>
                        <td class="kapital">{{ $uc->jurusan_2 }}</td>
                      </tr>
                    </table>
              @endforeach
              </div>
            </div>
            <div class="hidden" >
            <div class="row" id="dvPengawas">
              <div class="col-md-10 col-md-offset-1">
                <table class="table">
                  <tr>
                    <td>
                      <h4>Pengawas TPA,</h4><br><br><br><br>
                    <a>________________________________</a>
                    </td>
                    <td>
                      <h4>Pengawas TKDU,</h4><br><br><br><br>
                    <a>________________________________</a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            </div>

          </div>
        </div>
        <a href="#" onclick="PrintDiv()" class="btn btn-md btn-warning"><i class="fa fa-print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp</i> Cetak</a>
      <br><br><br>
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
                <a target="_blank" href="https://www.facebook.com/groups/397533683705069/?fref=nf"><img src="{{ URL::asset('content/fb.jpg') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a target="_blank" href="https://www.twitter.com/kamagamapwr"><img src="{{ URL::asset('content/twit.png') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a target="_blank" href="https://www.instagram.com/kamagamapwr/"><img src="{{ URL::asset('content/insta.png') }} " style="height:50px; width:50px; "></a>
              </div>
              <div class="col-md-3">
                <a target="_blank" href=""><img src="{{ URL::asset('content/line.png') }} " style="height:50px; width:50px; "></a>
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
    </div>
    <br><br><br><br>

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
<script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var pengawas = document.getElementById('dvPengawas').innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>Kartu Peserta SIMULTAN 2016 @foreach($cu as $uc) {{ $uc->nama_lengkap }} - 2016-{{ $nomor_tengah }}-{{ $uc->nomor_peserta }} @endforeach</title>');
            frameDoc.document.write('<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">');
            frameDoc.document.write('<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">');
            frameDoc.document.write('</head><body><h2 class="text-center" >Kartu Peserta Simultan 2016</h2><br>');
            frameDoc.document.write(contents);
            frameDoc.document.write('');
            frameDoc.document.write(pengawas);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>