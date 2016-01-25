<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ava now!</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
      
      <br><br><br><br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          @foreach($errors->all() as $errors)
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> Better check yourself, {{ $errors }}
            </div>
          @endforeach
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Ava Now!</h3>
            </div>
            <div class="panel-body">
              <h1 class="text-center">Upload your photo</h1><br><br>
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <form  class="form-horizontal" method="POST" action="{{ URL::to('ava/store') }}" enctype="multipart/form-data">
                    <div class="form-group" >
                      <label class="control-label col-sm-2">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama" name="name" value="{{ old('name') }}">  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2">Photo</label>
                      <div class="col-sm-10">
                        <input type="file" name="photo">
                        <p class="help-block">Maksimal 1MB.</p>
                      </div>
                    </div>
                    <input type="hidden" value="{{csrf_token()}}" name="_token"><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Upload</button>
                  </form>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>