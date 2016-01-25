<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Sosialisasi</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
    .form-horizontal .control-label{
      text-align:left;
    }
    </style>
  </head>
  <body>
  <br><br>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Edit SMA</h3>
        </div>
        @foreach($data as $key)
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <br>
              <form role="form" class="form-horizontal" method="POST" action="{{ URL::to('S0s14l1545i/update/') }}/{{ $key->id }}/change" >
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="{{ $key->hari }}" placeholder="Hari" name="hari">
                  </div>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="{{$key->tanggal}}" placeholder="Tanggal" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$key->sekolah}}" placeholder="Sekolah" name="sekolah">
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
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
  </body>
</html>