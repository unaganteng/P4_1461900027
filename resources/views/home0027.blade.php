<!DOCTYPE </html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Kegiatan 4</h2>
    <h3>1461900027</h3>

        </form>
        <a href="/export"> EXPORT DISINI </a>
        <p></p>
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