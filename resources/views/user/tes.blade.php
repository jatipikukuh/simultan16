<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($cu as $uc)
<form>
	<input value="{{ $uc->nama_lengkap }}" placeholder="nama_lengkap"></input>
	<input value="{{ $uc->alamat }}" placeholder="alamat"></input>
	<input value="{{ $uc->e_mail }}" placeholder="e_mail"></input>
	<input value="{{ $uc->nomor_hp }}" placeholder="nomor_hp"></input>
	<input value="{{ $uc->nomor_induk_siswa }}" placeholder="nomor_induk_siswa"></input>
	<input value="{{ $uc->asal_sekolah }}" placeholder="asal_sekolah"></input>
	<input value="{{ $uc->pilihan }}" placeholder="pilihan"></input>
	<input value="{{ $uc->jurusan_1 }}" placeholder="jurusan_1"></input>
	<input value="{{ $uc->jurusan_2 }}" placeholder="jurusan_2"></input>
	<input value="{{ $uc->id }}" placeholder="id"></input>
</form>
		
@endforeach
</body>
</html>