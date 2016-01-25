<!DOCTYPE html>
<html>
<head>
	<title>login admin</title>
</head>
<body>
	<form method="POST" action="{{ URL::to('') }}">
		<input placeholder="username" name="username"><br>
		<input placeholder="password" name="password"><br>
		<input type="hidden" value="{{ csrf_token() }}" name="_token" >
		<input type="submit" value="submit">
	</form>
	
</body>
</html>