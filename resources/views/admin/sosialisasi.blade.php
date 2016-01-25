<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tambah Sosialisasi</title>

    <!-- Bootstrap -->
 <!--   <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <style type="text/css">
    .form-horizontal .control-label{
      text-align:left;
    }
    </style>
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
                <li><a href="{{ URL::to('list/@L4Y/1') }}">Daftar Peserta</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('auth/logout') }}">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- end navbar -->
      <br><br>
  @if(isset($sukses))
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Selamat!</strong> {{$sukses}}
      </div>
    </div>
  </div>
  @endif
  @foreach($errors->all() as $error)
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Hadech -_- !</strong> {{$error}}
      </div>
    </div>
  </div>
  @endforeach
  <br>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Tambah SMA</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <br>
              <form role="form" class="form-horizontal" method="POST" action="{{ URL::to('S0s14l1545i/add') }}" >
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Hari" name="hari">
                  </div>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Tanggal" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Sekolah" name="sekolah">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Konfirmasi</label>
                  <div class="col-sm-10">
                    <select name="konfirmasi" class="form-control">
                      <option value="pending">Pending</option>
                      <option value="confirmed">Confirmed</option>
                      <option value="cancel">Cancel</option>
                      <option value="done">Done</option>
                    </select>
                  </div>
                </div><br><br>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <br><br><br><br><br>
    <h3 class="text-center">Tabel Sosialisasi</h3>
    <br><br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Hari, Tanggal</th>
              <th>Sekolah</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach($data as $key)
          <tr>
            <td>{{ $key->hari }}, {{ $key->tanggal }}</td>
            <td>{{ $key->sekolah }}</td>
            <td>{{ $key->konfirmasi }}</td>
            <td>
              <a class="btn btn-primary btn-sm" href="{{ URL::to('S0s14l1545i/edit') }}/{{ $key->id }}" role="button">Edit</a> &nbsp
              <a class="btn btn-danger btn-sm" href="{{ URL::to('S0s14l1545i/del')}}/{{$key->id}}" role="button">Hapus</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
    </script>
  </body>
</html>