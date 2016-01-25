<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tiket</title>

    <!-- Bootstrap -->
    <!--   <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="row">
      
      <div class="col-md-2 col-md-offset-0">
        
        <table class="table table-bordered">
          @foreach($hasil as $hasils)
          <tr>
            <td>{{ $hasils->id }}</td>
            <td>{{ $hasils->username }}</td>
            <td>{{ $hasils->password }}</td>
          </tr>
          @endforeach
        </table>
      </div>
      
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>