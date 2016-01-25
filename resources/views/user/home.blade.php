<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Beranda</title>

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
                <li><a href="#">Login</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('logout') }}">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- end navbar -->

    <br><br><br><br><br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">LOGIN</h3>
          </div>
          <div class="panel-body">
          <!-- erornya di sini -->
            @foreach($errors->all() as $error)
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> {{ $error }}
              </div>
            @endforeach
          <!-- end error -->
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
              <br><br>

                <form method="POST" action="{{ URL::to('bikin/auth') }}">
                
                  <div class="form-group">
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input  name="password" value="{{ $pass }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input  name="pass" value="{{ bcrypt($pass) }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                  </div>  
                  
                </form>
                <br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>