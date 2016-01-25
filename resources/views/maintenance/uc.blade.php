<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perbaikan Website</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
  <br><br><br>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Perbaikan Website</h3>
          </div>
          <div class="panel-body">
            <br><br>
            <div class="text-center">
              <button class="btn btn-lg btn-danger anu">
                <span class="glyphicon glyphicon-wrench" style="font-size:100px;" aria-hidden="true"></span>
              </button>
            </div>
            <br><br>
            <h3 class="text-center">
              Mohon Maaf, Website ini sedang dalam perbaikan <br><span class="anu2">hingga sabtu, 1 januari 2016 <br> pukul 16.00 WIB
            </span></h3>
            <br>
            <h4 class="text-center">more info?</h4>
            <br>
            <div class="text-center">
              <button class="btn btn-primary btn-md text-center">
                Facebook
              </button>&nbsp &nbsp
              <button class="btn btn-primary btn-md text-center">
                Twitter
              </button>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>