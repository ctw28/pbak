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
        <h1 class="text-center mb-5">DASHBOARD ADMIN</h1>
        <!-- <div class="card card-body"> -->
        <h3>Daftar Peleton</h3>
        <div class="col-sm-12">
            <!-- <div class="row "> -->
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <th>No</th>
                    <th>Peleton</th>
                    <th>Jumlah Anggota</th>
                    <th>Kelola</th>
                </thead>
                <tbody>
                    @foreach($kelompok as $index => $row)
                    <tr>
                        <td class="text-center">{{$index + 1}}</td>
                        <td>{{$row->kelompok_nama}}</td>
                        <td class="text-center">{{$row->peserta_count}}</td>
                        <td class="text-center"><button data-kelompok-id="{{$row->id}}" onclick="kelola(event)" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Kelola</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- </div> -->

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->

        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span id="peleton"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="content">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelamin</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody id="content-peserta">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // alert('yo')
        // init()

        async function kelola(e) {
            // alert()
            let kelompokId = e.target.dataset.kelompokId
            let url = '{{route("kelompok.peserta",["20231",":id"])}}';
            url = url.replace(':id', kelompokId)
            // console.log(url);
            let sendRequest = await fetch(url)
            let response = await sendRequest.json()
            console.log(response);
            document.querySelector('#peleton').innerHTML = response.data.kelompok_nama
            let contentPeserta = ''
            document.querySelector('#content-peserta').innerHTML = ''
            response.data.peserta.map(function(data, i) {
                contentPeserta += `
                <tr>
                    <td>${i + 1}</td>
                    <td>${data.mahasiswa.nim}</td>
                    <td>${data.mahasiswa.data_diri.nama_lengkap}</td>
                    <td>${data.mahasiswa.data_diri.jenis_kelamin}</td>
                    <td>${data.mahasiswa.prodi.prodi_kode}</td>
                    <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                </tr>
                `
            })
            document.querySelector('#content-peserta').innerHTML = contentPeserta
        }
    </script>
</body>

</html>