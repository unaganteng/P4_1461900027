<!DOCTYPE </html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Kegiatan 4</h2>
    <h3>1461900027</h3>
    <p>Cari Buku :</p>
        <form action="/buku/cari" method="GET">
        <input type="text" name="lihat" placeholder="Masukan disini .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
        <a href="/export"> export </a>
    <table border="1" style="background-color:Tomato; width:100%">
    
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>