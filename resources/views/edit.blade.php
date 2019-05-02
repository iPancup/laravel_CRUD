<!DOCTYPE html>
<html>
<head>
    <title>Ivan Yusuf - Laravel</title>
</head>
<body>
 
    <h2><a >Perpustakaan</a></h2>
    <h3>Edit Buku</h3>
 
    <a href="/bukus"> Kembali</a>
    
    <br/>
    <br/>
 
    @foreach($bukus as $b)
    <form action="/bukus/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
        ID <input type="text" name="id" required="required" value="{{ $b->id }}"> <br/>
        Judul <input type="text" name="judul" required="required" value="{{ $b->judul }}"> <br/>
        Penerbit <input type="text" name="penerbit" required="required" value="{{ $b->penerbit }}"> <br/>
        Tahun Terbit <input type="number" name="tahunTerbit"required="required" value="{{ $b->tahunTerbit }}"></input> <br/>
        Pengarang <input type="text" name="pengarang" required="required" value="{{ $b->pengarang }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
        
 
</body>
</html>