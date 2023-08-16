@extends('template')

@section('content')

<div class="col-12">
    <div class="card h-100">

        <div class="card-body">
            <h3>Pleton Anda : <span class="badge bg-gradient-info">{{$peserta->kelompok->kelompok_nama}}</span>
            </h3>

            <div class="row">
                @foreach($peserta->kelompok->pemandu as $pemandu)

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card bg-gradient-primary">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-7">
                                    <div class="numbers">
                                        <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Pendamping Pleton / LO</p>
                                        <h5 class="font-weight-bolder mb-0" style="color:yellow">
                                            {{$pemandu->pemandu_nama}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-5 text-end text-white text-bold">
                                    {{$pemandu->pemandu_hp}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- <div class="col-12">
                <div class="col-6">
                    <div class="card card-body text-center">
                        <h4></h4>
                        <h5></h5>
                    </div>
                </div>

            </div> -->
            <h4 class="my-4">Anggota Pleton</h4>
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>HP</th>
                </thead>
                <tbody>
                    @foreach($peserta->kelompok->peserta as $index => $peserta)

                    @if($peserta->mahasiswa->id==Auth::user()->userMahasiswa->mahasiswa_id)
                    <tr>

                        <td class="text-center"><strong>{{$index+1}}</strong></td>
                        <td class="text-center"><strong>{{$peserta->mahasiswa->nim}}</strong> </td>
                        <td><strong>{{$peserta->mahasiswa->dataDiri->nama_lengkap}} </strong></td>
                        <td class="text-center"><strong>{{$peserta->mahasiswa->prodi->prodi_kode}} </strong></td>
                        <td class="text-center"><strong>{{$peserta->mahasiswa->dataDiri->no_hp}} </strong></td>

                    </tr>
                    @else
                    <tr>
                        <td class="text-center">{{$index+1}}</td>
                        <td class="text-center">{{$peserta->mahasiswa->nim}} </td>
                        <td>{{$peserta->mahasiswa->dataDiri->nama_lengkap}} </td>
                        <td class="text-center">{{$peserta->mahasiswa->prodi->prodi_kode}} </td>
                        <td class="text-center">{{$peserta->mahasiswa->dataDiri->no_hp}} </td>
                        @endif

                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection