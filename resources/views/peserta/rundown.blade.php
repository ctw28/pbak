@extends('template')

@section('content')
<div class="col-12">
    <div class="card">

        <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
                <h6 class="mb-0">Rundown PBAK</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Absensi</th>
                            <th>Tanggal</th>
                            <th>Kegiatan</th>
                            <th>Pemateri</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rundown as $index => $item)
                        <tr>
                            <td class="text-center">{{$index +1}}</td>
                            <td>Belum terbuka</td>
                            <!-- <td><button class="btn btn-primary btn-sm">Absen</button></td> -->
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->kegiatan_nama}}</td>
                            <td>{{$item->pemateri}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection