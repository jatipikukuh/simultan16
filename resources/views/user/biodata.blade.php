<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biodata</title>

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
            <h3 class="panel-title">Biodata</h3>
          </div>
          <div class="panel-body">
          <br>
            <div class="text-center">
              <button class="btn btn-lg btn-primary anu">
                <span class="glyphicon glyphicon-user" style="font-size:50px;" aria-hidden="true"></span>
              </button>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
              <!-- erornya di sini -->
              @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Warning!</strong> {{ $error }}
                </div>
              @endforeach
              <!-- end error -->
              
                <!-- form nya tuh disini -->
                <form class="form-horizontal" method="POST" action="{{ URL::to('/user/submit') }}" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-3 control-label">FOTO 3X4 (Maks.300KB) *</label>
                    <div class="col-sm-9">
                      <input type="file" name="image">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-3 control-label">Nama Lengkap *</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_lengkap" id="inputNama" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat *</label>
                    <div class="col-sm-9">
                      <textarea class="form-control"  name="alamat" placeholder="Alamat" rows="4"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email *</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="e_mail" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nomor_hp" class="col-sm-3 control-label">Nomor HP *</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Nomor Telepon / Nomor HP">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nisn" class="col-sm-3 control-label">Kartu Pelajar  *</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nomor_induk_siswa" id="nisn" placeholder="Kartu Pelajar / NISN">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sekolah" class="col-sm-3 control-label sikatMiring">Asal Sekolah *</label>
                    <select name="asal_sekolah" class="form-control form-control-2" id="schoolContainer">
                      <option value="SMA N 1 PURWOREJO">SMA N 1 PURWOREJO</option>
                      <option value="SMA N 2 PURWOREJO">SMA N 2 PURWOREJO</option>
                      <option value="SMA N 3 PURWOREJO">SMA N 3 PURWOREJO</option>
                      <option value="SMA N 4 PURWOREJO">SMA N 4 PURWOREJO</option>
                      <option value="SMA N 5 PURWOREJO">SMA N 5 PURWOREJO</option>
                      <option value="SMA N 6 PURWOREJO">SMA N 6 PURWOREJO</option>
                      <option value="SMA N 7 PURWOREJO">SMA N 7 PURWOREJO</option>
                      <option value="SMA N 8 PURWOREJO">SMA N 8 PURWOREJO</option>
                      <option value="SMA N 9 PURWOREJO">SMA N 9 PURWOREJO</option>
                      <option value="SMA N 10 PURWOREJO">SMA N 10 PURWOREJO</option>
                      <option value="SMA N 11 PURWOREJO">SMA N 11 PURWOREJO</option>
                      <option value="SMK N 1 PURWOREJO">SMK N 1 PURWOREJO</option>
                      <option value="SMK N 2 PURWOREJO">SMK N 2 PURWOREJO</option>
                      <option value="SMK N 3 PURWOREJO">SMK N 3 PURWOREJO</option>
                      <option value="SMK N 4 PURWOREJO">SMK N 4 PURWOREJO</option>
                      <option value="SMA BRUDERAN PURWOREJO">SMA BRUDERAN PURWOREJO</option>
                      <option value="MA N PURWOREJO">MA N PURWOREJO</option>
                    </select>
                    <br>
                    
                    <div class="col-sm-7 col-md-offset-3">
                      <input type="text" class="form-control" id="newSchool" placeholder="Tambah Sekolah">
                    </div>
                    <input type="button" class="btn btn-sm btn-primary" id="addSchool" value="Tambah">
                  </div>
                  <br>
                  <h4>Minat Perguruan Tinggi Negeri</h4>
                  <br>
                  <div class="form-group">
                    <label for="pilihan" class="col-sm-3 control-label">Pilihan *</label>
                    <div class="col-sm-9">
                      <input type="text" disabled="" class=" form-control" name="pilihan" id="pilihan" value="{{$pili}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="prodi1" class="col-sm-3 control-label">Prodi/Jurusan 1*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="jurusan_1" id="prodi1" placeholder="Prodi / Jurusan 1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="prodi2" class="col-sm-3 control-label">Prodi/Jurusan 2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="jurusan_2" id="prodi2" placeholder="Prodi / Jurusan 2">
                    </div>
                  </div>

                  <br>
                  <div class="form-group">
                    <h5>* wajib di isi</h5>
                    <div class="col-sm-offset-3 col-sm-9">

                      <div class="checkbox">
                        <label>
                          <input required type="checkbox"> Saya telah membaca dan bersedia untuk memenuhi<span> <a target="_tab" href="{{ URL::to('rule') }}">ketentuan simultan 2016</a> </span> yang berlaku. 
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                      <button type="submit" class="btn btn-primary">Submit</button> &nbsp
                      <button type="button" class="btn btn-warning">Cancel</button>
                    </div>
                  </div>
                </form>
                <!-- form selesai di sini -->
              </div>
            </div>
            <br>
            <br>
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

    <!-- modal e ning kene -->

    <div class="modal fade bs-example-modal-lg" id="disini" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel" style="color:black;">FORMAT PENGISIAN FORM</h4>
          </div>
          <div class="modal-body">
            <!-- isinya tuh di sini -->
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">Biodata</h3>
                      </div>
                      <div class="panel-body">
                      <br>
                        <div class="text-center">
                          <button class="btn btn-lg btn-primary anu">
                            <span class="glyphicon glyphicon-user" style="font-size:50px;" aria-hidden="true"></span>
                          </button>
                        </div>
                        <br><br>
                        <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                            <!-- form nya tuh disini -->
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label for="inputNama" class="col-sm-3 control-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="JATI SEJATI" type="text" class="form-control" name="nama_lengkap" id="inputNama" placeholder="Nama Lengkap">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-9">
                                  <textarea disabled="" class="form-control"  name="alamat" placeholder="Alamat" rows="4">RT1 RW2, NGAMPEL, PITURUH, PURWOREJO</textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="pikuk_jati@yahoo.co.id" type="email" class="form-control" name="e_mail" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nomor_hp" class="col-sm-3 control-label">Nomor HP</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="085743303940" type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Nomor Telepon / Nomor HP">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nisn" class="col-sm-3 control-label">Kartu Pelajar</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="1699" type="text" class="form-control" name="nomor_induk_siswa" id="nisn" placeholder="Kartu Pelajar / NISN">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="sekolah" class="col-sm-3 control-label">Asal Sekolah</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="SMA NEGERI 9 PURWOREJO" type="text" class="form-control" name="asal_sekolah" id="sekolah" placeholder="Asal Sekolah">
                                </div>
                              </div>
                              <br>
                              <h4>Minat Perguruan Tinggi Negeri</h4>
                              <br>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Pilihan</label>
                                <div class="col-sm-9">
                                  <select disabled="" name="pilihan" class="form-control">
                                    <option value="Saintek">Saintek</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="prodi1" class="col-sm-3 control-label">Prodi/Jurusan 1</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="Teknik Industri - UGM" type="text" class="form-control" name="jurusan_1" id="prodi1" placeholder="Prodi / Jurusan 1">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="prodi2" class="col-sm-3 control-label">Prodi/Jurusan 2</label>
                                <div class="col-sm-9">
                                  <input disabled="" value="Teknik Elektro - ITS" type="text" class="form-control" name="jurusan_2" id="prodi2" placeholder="Prodi / Jurusan 2">
                                </div>
                              </div>

                              <br>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <div class="checkbox">
                                    <label>
                                      <input checked="" type="checkbox"> Saya telah membaca dan bersedia untuk memenuhi<span> <a target="_tab" href="{{ URL::to('rule') }}">ketentuan simultan 2016</a> </span> yang berlaku. 
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <button disabled="" type="button" class="btn btn-primary">Submit</button> &nbsp
                                  <button disabled="" type="button" class="btn btn-warning">Cancel</button>
                                </div>
                              </div>
                            </form>
                            <!-- form selesai di sini -->
                          </div>
                        </div>
                        <br>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- end modal e ning kene -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){

          $("#addSchool").click(function(){
          $("#schoolContainer").append('<option value="' + $("#newSchool").val() + '">' + $("#newSchool").val() + '</option>');
          });

      });
    </script>
  </body>
</html>