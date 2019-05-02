<!DOCTYPE html>
<html>
<head>
	<title>RIvan Yusuf - Laravel</title>
</head>
<body>
 
	<h2><a>Perpustakaan</a></h2>
	<h3>Data Buku</h3>
 
	<a href="/bukus"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/bukus/action" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="judul" required="required"> <br/>
		Penerbit <input type="text" name="penerbit" required="required"> <br/>
		Tahun Terbit <input type="number" name="tahunTerbit"required="required"></input> <br/>
		Pengarang <input type="text" name="pengarang" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>