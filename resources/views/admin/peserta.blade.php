<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="mb-3">Daftar Peserta {{$kelompok->kelompok_nama}}</h1>
        <button class="btn btn-primary" onclick="copyTable()">Salin Tabel</button>

        <table class="table table-striped table-hover" id="myTable">
            <thead>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Prodi</th>
                <th>HP</th>
            </thead>
            <tbody>
                @foreach($kelompok->peserta as $index => $peserta)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$peserta->mahasiswa->nim}}</td>
                    <td>{{$peserta->mahasiswa->dataDiri->nama_lengkap}}</td>
                    <td>{{$peserta->mahasiswa->dataDiri->jenis_kelamin}}</td>
                    <td>{{$peserta->mahasiswa->prodi->prodi_kode}}</td>
                    <td>{{$peserta->mahasiswa->dataDiri->no_hp}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function copyTable() {
            var body = document.body,
                range, sel;
            var el = document.getElementById("myTable");
            if (document.createRange && window.getSelection) {
                range = document.createRange();
                sel = window.getSelection();
                sel.removeAllRanges();
                range.selectNodeContents(el);
                sel.addRange(range);
            }
            document.execCommand("Copy");
            alert('sudah tercopy');
        }
    </script>
</body>

</html>