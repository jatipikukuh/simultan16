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
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
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
                        <a class="page-scroll" href="#Lokasi">Lokasi</a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Akun <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/user') }}">Profil</a></li>
                          <li><a href="{{ url('/rule') }}">Peraturan</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="{{ url('/auth/logout') }}">Log Out</a></li>
                        </ul>
                        
                      </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">SIMULTAN 2016</h1>
                        <p class="intro-text">Simulasi Ujian Seleksi Bersama Masuk Perguruan Tinggi Negeri tahun 2016</p>
                        <p class="intro-text">Minggu, 31 Januari 2016 di SMA N 7 Purworejo pukul 07.00 - 13.00 WIB</p>
                        <div class="row">
                          <div class="col-md-12 col-md-offset-0">
                            <div class="maghfirahKotak">
                              <br>
                              <div id="main">
                               <div id="counter"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <a href="#info" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- info Section -->
    <section id="info" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>INFO SIMULTAN 2016</h2>
                 <p>Simultan (Simulasi SBMPTN Nasional) merupakan acara Simulasi Ujian SBMPTN yang selenggarakan oleh keluarga mahasiswa Universitas Gadjah Mada. Selain di Purworejo acara ini di adakan pula di berbagai daerah di Indonesia.</p>
                 <p>Acara ini bertujuan untuk memberikan pelatihan soal SBMPTN kepada siswa SMA/SMK Sederajat kelas 12. Dari acara ini siswa di beri tahu gambaran umum situasi pada saat Ujian SBMPTN. Diharapkan dari acara ini siswa dapat mengukur kemampuannya dan termotivasi untuk giat belajar.</p>
                 <p>Selain mengerjakan soal, dari acara ini siswa bisa mencari info-info mengenai Universitas Gadjah Mada dan tips-tips agar bisa di terima di Universitas Gadjah Mada.</p>
                 <p>SIMULTAN 2015 kali ini hanya menyediakan Ujian Soshum(IPS) dan Ujian Saintek(IPA) saja, <b>TIDAK</b> mengadakan ujian Campuran(IPC). Untuk harga resmi tiket yang di keluarkan panitia yaitu IDR 18K.</p>
            </div>
        </div>
    </section>
    <!-- cara daftar Section -->
    <section id="daftar" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Cara Daftar SIMULTAN 2016</h2>
                    <h3>Daftar tempat pembelian tiket : </h3>
                    <h3>1. Beli di <a href="#" data-toggle="modal" data-target="#stand">Stand SIMULTAN</a></h3>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="stand" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="color:black;">DAFTAR STAND</h4>
                              </div>
                              <div class="modal-body">
                                <table class="table table-hover">
                                  <tr>
                                      <td>No</td>
                                      <td>Alamat</td>
                                      <td>Tanggal & waktu buka</td>
                                      <td>Contact Person</td>
                                  </tr>
                                  <tr>
                                      <td>1.</td>
                                      <td>SMA N 1 PURWOREJO</td>
                                      <td>-</td>
                                      <td>0857-2905-5276(Sugeng)</td>
                                  </tr>
                                  <tr>
                                      <td>2.</td>
                                      <td>SMA N 2 PURWOREJO</td>
                                      <td>-</td>
                                      <td>0857-2905-5276(Sugeng)</td>
                                  </tr>
                                  <tr>
                                      <td>3.</td>
                                      <td>SMA N 7 PURWOREJO</td>
                                      <td>-</td>
                                      <td>0857-2905-5276(Sugeng)</td>
                                  </tr>
                                  <tr>
                                      <td>4.</td>
                                      <td>Alun-Alun Purworejo</td>
                                      <td>-</td>
                                      <td>0857-2905-5276(Sugeng)</td>
                                  </tr>
                                </table>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    <h3>2. Beli di <a href="#" data-toggle="modal" data-target="#sosialisasi">Sosialisasi UGM</a></h3>
                    <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="sosialisasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="color:black;">DAFTAR SOSIALISASI UGM</h4>
                              </div>
                              <div class="modal-body">
                              <!-- 
                              <td><span class="label label-default">PENDING</span></td>
                              <td><span class="label label-info">CONFIRMED</span></td>
                              <td><span class="label label-danger">CANCELED</span></td>
                              <td><span class="label label-success">DONE</span></td>
                              -->
                                <table class="table table-hover">
                                  <tr>
                                      <td>No</td>
                                      <td>Tanggal</td>
                                      <td>Sekolah</td>
                                      <td>Konfirmasi</td>
                                  </tr>
                                  <tr>
                                      <td>1.</td>
                                      <td>-</td>
                                      <td>SMA N 1 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>2.</td>
                                      <td>-</td>
                                      <td>SMA N 2 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>3.</td>
                                      <td>-</td>
                                      <td>SMA N 3 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>4.</td>
                                      <td>-</td>
                                      <td>SMA N 4 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>5.</td>
                                      <td>-</td>
                                      <td>SMA N 5 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>6.</td>
                                      <td>-</td>
                                      <td>SMA N 6 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>7.</td>
                                      <td>-</td>
                                      <td>SMA N 7 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>8.</td>
                                      <td>-</td>
                                      <td>SMA N 8 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>9.</td>
                                      <td>-</td>
                                      <td>SMA N 9 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>10.</td>
                                      <td>-</td>
                                      <td>SMA N 10 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>11.</td>
                                      <td>-</td>
                                      <td>SMA N 11 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>12.</td>
                                      <td>-</td>
                                      <td>SMK N 1 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>13.</td>
                                      <td>-</td>
                                      <td>SMK N 2 PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>14.</td>
                                      <td>-</td>
                                      <td>SMK BRUDERAN PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                  <tr>
                                      <td>15.</td>
                                      <td>-</td>
                                      <td>MA N PURWOREJO</td>
                                      <td><span class="label label-default">PENDING</span></td>
                                  </tr>
                                </table>
                                <div style="color:black; text-align:left;">
                                  <span class="label label-default">PENDING</span>
                                  &nbsp : &nbsp Surat sudah terkirim ke Sekolah namun belum ada respon.
                                  <br>
                                  <span class="label label-info">CONFIRMED</span>
                                  &nbsp : &nbsp Surat sudah terkirim ke Sekolah dan sudah fix akan di datangi dari Team Sosialisasi UGM.
                                  <br>
                                  <span class="label label-danger">CANCELED</span>
                                  &nbsp : &nbsp Surat sudah terkirim ke Sekolah namun pihak sekolah membatalkan.
                                  <br>
                                  <span class="label label-success">DONE</span>
                                  &nbsp : &nbsp Sosialisasi UGM sudah terlaksana.
                                  <br>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h3>3. Beli di <a href="https://twitter.com/ExpoUniv_2016" target="_blank" >EXPO UNIVERSITAS 2016</a> di Stand UGM</h3>
                </div>
            </div>
        </div>
    </section>
<br><br><br>
    <!-- Contact Section -->
    <section id="Lokasi" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Lokasi SIMULTAN 2016</h2>
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                        <div class="embed-responsive embed-responsive-4by3">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.670642954575!2d110.00353401447609!3d-7.718443094436426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577f4789249f%3A0x2a19bb8eafe2109a!2sSMAN+7+Purworejo!5e0!3m2!1sen!2sid!4v1446751857241" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- Contact Section -->
    <section id="kontak" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>KONTAK ADMIN SIMULTAN 2016</h2>
                <p>Tentu masih banyak kekurangan dari panitia penyelenggara SIMULTAN 2016. Untuk itu mohon saran dan pesan agar panitia SIMULTAN 2017 lebih baik lagi dalam mengemban tugas.</p>

                <p>Kritik, saran, atau ada permasalahan bisa di adukan melalui nomor 0823-1462-9703 (Rahma).</p>
                <p><a href="mailto:kgmpwr@gmail.com">kgmpwr@gmail.com</a></p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a target="_blank" href="https://www.twitter.com/kamagamapwr" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/groups/397533683705069/?fref=nf" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section><br><br>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="https://www.facebook.com/jati.pikukuh">Jati Pikukuh</a> 2016</p>
        </div>
    </footer>
    <br><br><br><br>


    <script>
    function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(-7.7747743,110.3743821),
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
      <script>

$(document).ready(function(){


  /* ---- Countdown timer ---- */

  $('#counter').countdown({
    <?php
    date_default_timezone_set('Asia/Jakarta');

    $now = date("Y/m/d g:i:s");
    $d3=strtotime($now);
    $d1=strtotime("11:00pm 11/30/2015");
    $d2=ceil(($d1-$d3)*1000);


    echo "timestamp : (new Date()).getTime() + ".$d2;
    ?>
  });


  /* ---- Animations ---- */

  $('#links a').hover(
    function(){ $(this).animate({ left: 3 }, 'fast'); },
    function(){ $(this).animate({ left: 0 }, 'fast'); }
  );

  $('footer a').hover(
    function(){ $(this).animate({ top: 3 }, 'fast'); },
    function(){ $(this).animate({ top: 0 }, 'fast'); }
  );


  /* ---- Using Modernizr to check if the "required" and "placeholder" attributes are supported ---- */

  if (!Modernizr.input.placeholder) {
    $('.email').val('Input your e-mail address here...');
    $('.email').focus(function() {
      if($(this).val() == 'Input your e-mail address here...') {
        $(this).val('');
      }
    });
  }

  // for detecting if the browser is Safari
  var browser = navigator.userAgent.toLowerCase();

  if(!Modernizr.input.required || (browser.indexOf("safari") != -1 && browser.indexOf("chrome") == -1)) {
    $('form').submit(function() {
      $('.popup').remove();
      if(!$('.email').val() || $('.email').val() == 'Input your e-mail address here...') {
        $('form').append('<p class="popup">Please fill out this field.</p>');
        $('.email').focus();
        return false;
      }
    });
    $('.email').keydown(function() {
      $('.popup').remove();
    });
    $('.email').blur(function() {
      $('.popup').remove();
    });
  }


});


  </script>
  
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{URL::asset('js/jquery.countdown.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/grayscale.js') }}"></script>
</body>
</html>