<!DOCTYPE html>
<html>
<head>
	<title>Ava All!</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<style type="text/css">
		img{
			width:100%;
		}
	</style>
</head>
<body>

<h2>{{ date_default_timezone_set('Asia/Jakarta') }}</h2>
	<h1>{{ date("h:i:sa d:m:Y") }}</h1>
	<br><br>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-stripped table-bordered">
				<thead>
					<tr>
						<th>nama</th>
						<th>Foto</th>
					</tr>
				</thead>
				@foreach($data as $key)
				<tr>
					<td>{{ $key->name }}</td>
					<td>
					<img src="{{URL::asset('avas')}}/{{ $key->file_name }}">
					</td>
				</tr>
				@endforeach
			</table>	
		</div>
	</div>
</body>
</html>