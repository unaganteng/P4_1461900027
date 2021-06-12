<!DOCTYPE html>
<html>
<head>
    <title>Kegiatan 3</title>
    </head>
        <body>
            <h3>Kegiatan 3 Menampilkan Data User</h3>
            <p>Kolom Pencarian</p>
            <form action="/book/cari" method="GET">
                <p> Cari Pelanggan  <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI"></p>
            </form>
                <br>
                <form action="/book/ruang" method="GET">
                        <p> Cari Id Pelanggan <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                        <input type="submit" value="CARI"></p>
                    </form>
                        <a href="/book/tambah"> + Pelanggan Baru </a>
                        <p></p>
                        <table border="1">
                            <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Tahun Terbit</th>

                            </tr>
@foreach($book as $use)
                            <tr>
                                <td>{{ $use->id }}</td>
                                <td>{{ $use->judul }}</td>
                                <td>{{ $use->tahun_terbit }}</td>
                                <td>
                                    <a href="/book/edit/{{ $use->id }}">Edit</a>
                                    <a href="/book/hapus/{{ $use->id }}">Hapus</a>
                                </td>
                                    </tr>
@endforeach
</table>
</body>
</html>