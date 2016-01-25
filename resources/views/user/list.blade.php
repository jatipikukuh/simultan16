<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Peserta</title>

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
                <li><a href="{{ URL::to('S0s14l1545i') }}">Sosialisasi</a></li>
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
    	<div class="col-md-10 col-md-offset-1 text-center">
    	 <nav>
        <ul class="pagination">
          <li><a href="{{URL::to('/list/@L4Y/1')}}">1</a></li>
          <li><a href="{{URL::to('/list/@L4Y/2')}}">2</a></li>
          <li><a href="{{URL::to('/list/@L4Y/3')}}">3</a></li>
          <li><a href="{{URL::to('/list/@L4Y/4')}}">4</a></li>
          <li><a href="{{URL::to('/list/@L4Y/5')}}">5</a></li>
          <li><a href="{{URL::to('/list/@L4Y/6')}}">6</a></li>
          <li><a href="{{URL::to('/list/@L4Y/7')}}">7</a></li>
          <li><a href="{{URL::to('/list/@L4Y/8')}}">8</a></li>
          <li><a href="{{URL::to('/list/@L4Y/9')}}">9</a></li>
          <li><a href="{{URL::to('/list/@L4Y/10')}}">10</a></li>
          <li><a href="{{URL::to('/list/@L4Y/11')}}">11</a></li>
          <li><a href="{{URL::to('/list/@L4Y/12')}}">12</a></li>
          <li><a href="{{URL::to('/list/@L4Y/13')}}">13</a></li>
          <li><a href="{{URL::to('/list/@L4Y/14')}}">14</a></li>
          <li><a href="{{URL::to('/list/@L4Y/15')}}">15</a></li>
          <li><a href="{{URL::to('/list/@L4Y/16')}}">16</a></li>
          <li><a href="{{URL::to('/list/@L4Y/17')}}">17</a></li>
          <li><a href="{{URL::to('/list/@L4Y/18')}}">18</a></li>
          <li><a href="{{URL::to('/list/@L4Y/19')}}">19</a></li>
          <li><a href="{{URL::to('/list/@L4Y/20')}}">20</a></li>
          <li><a href="{{URL::to('/list/@L4Y/21')}}">21</a></li>
          <li><a href="{{URL::to('/list/@L4Y/22')}}">22</a></li>
          <li><a href="{{URL::to('/list/@L4Y/23')}}">23</a></li>
          <li><a href="{{URL::to('/list/@L4Y/24')}}">24</a></li>
          <li><a href="{{URL::to('/list/@L4Y/25')}}">25</a></li>
          <li><a href="{{URL::to('/list/@L4Y/26')}}">26</a></li>
        </ul>
      </nav>
      <br><br>
      <h4>ruang {{ $room }}</h4>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Peserta</h3>
          </div>
          <div class="panel-body">
            <div id="dvContents">
      			<table class="table table-striped table-bordered">
      				<thead>
      					<tr>
      						<th>Nomor Peserta</th>
      						<th>Nama Lengkap</th>
      						<th>Pilihan</th>
      						<th>Prodi 1</th>
                  <th>Prodi 2</th>
                  <th>Tanda Tangan</th>
      					</tr>
      				</thead>
      				
              @foreach($dataSaintek as $sain)
      				<tr>
      					<td>2014-080-{{ $sain->nomor_peserta }}</td>
      					<td class="text-capitalize">{{ $sain->nama_lengkap }}</td>
                <td class="text-capitalize">{{ $sain->pilihan }}</td>
      					<td class="text-capitalize">{{ $sain->jurusan_1 }}</td>
                <td class="text-capitalize">{{ $sain->jurusan_2 }}</td>
                <td>......................</td>
      				</tr>
      				@endforeach
              
              
              @foreach($dataSoshum as $sos)
              <tr>
                <td>2014-081-{{ $sos->nomor_peserta }}</td>
                <td class="text-capitalize">{{ $sos->nama_lengkap }}</td>
                <td class="text-capitalize">{{ $sos->pilihan }}</td>
                <td class="text-capitalize">{{ $sos->jurusan_1 }}</td>
                <td class="text-capitalize">{{ $sos->jurusan_2 }}</td>
                <td>......................</td>
              </tr>
              @endforeach
              
      			</table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    <div class="hidden" >
      <div class="row" id="dvPengawas">
        <div class="col-md-10 col-md-offset-1">
          <table class="table">
            <tr>
              <td>
                <h4>Pengawas 1,</h4><br><br><br><br>
              <a>________________________________</a>
              </td>
              <td>
                <h4>Pengawas 2,</h4><br><br><br><br>
              <a>________________________________</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
        <div class="row" id="header">
          <div  class="text-center col-md-10 col-md-offset-1">
          <!--<img src="{{ URL::asset('content/ugm.png') }}"  style="height:30%; width:8% "> -->
          <img style="height:30%; width:15% " src="{{ URL::asset('content/kamagama.png') }}">
            <h2>Presensi Simultan 2016</h2><br>  
          </div>
        </div>
    </div>
    <a href="#" onclick="PrintDiv()" class="btn btn-md btn-warning"><i class="fa fa-print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp</i> Cetak</a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var pengawas = document.getElementById('dvPengawas').innerHTML;
            var header = document.getElementById('header').innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>Presensi SIMULTAN 2016 ruang {{$room}}</title>');
            frameDoc.document.write('<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">');
            //frameDoc.document.write('<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(header);
            frameDoc.document.write('Ruang : {{$room}}');
            frameDoc.document.write(contents);
            frameDoc.document.write('<br><br>');
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
  </body>
</html>

