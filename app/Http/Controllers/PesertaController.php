<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Mahasiswa;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //

    public function index($gelombang)
    {

        $kelompok = Kelompok::withCount(['peserta'])
            ->get();
        // return $kelompok;
        return view('admin.kelompok', compact('kelompok'));
    }

    public function kelompokPeserta($pbakId, $kelompokId)
    {
        $kelompok = Kelompok::with(['peserta.mahasiswa.dataDiri', 'peserta.mahasiswa.prodi'])
            ->where('id', $kelompokId)
            ->first();
        // return $kelompok;
        return response()->json([
            'status' => true,
            'message' => 'data ditemukan ji',
            'data' => $kelompok,
        ], 200);
    }
    public function sinkron($gelombang)
    {
        $title = 'Daftar Peserta';
        return view('admin.sinkron', compact('title'));
    }

    public function import()
    {
        $mahasiswasL = Mahasiswa::with(['dataDiri' => function ($dataDiri) {
            $dataDiri->where('jenis_kelamin', 'L');
        }])
            ->whereHas('dataDiri', function ($dataDiri) {
                $dataDiri->where('jenis_kelamin', 'L');
            })
            ->get();
        $mahasiswasP = Mahasiswa::with(['dataDiri' => function ($dataDiri) {
            $dataDiri->where('jenis_kelamin', 'P');
        }])
            ->whereHas('dataDiri', function ($dataDiri) {
                $dataDiri->where('jenis_kelamin', 'P');
            })
            ->get();
        // $gg = "ada";
        // if (isset($mahasiswasP[941]))
        //     $gg = "aaaa";
        // return $gg;
        // return $mahasiswasP[942];

        $kelompoks = Kelompok::all();
        $awalL = 0;
        $awalP = 0;
        $pesertaL = 15;
        $pesertaP = 34;
        $kelipatanL = 15;
        $kelipatanP = 34;
        // $pesertaL = 14;
        // $pesertaP = 33;
        // $coba = 2;
        foreach ($kelompoks as $kelompok) {
            // if ($coba < 4) {
            $peserta = [];
            for ($l = $awalL; $l < $pesertaL; $l++) {
                if (isset($mahasiswasL[$l])) {

                    $peserta[] = [
                        'mahasiswa_id' => $mahasiswasL[$l]->id,
                        'kelompok_id' => $kelompok->id,
                    ];
                }
            }
            Peserta::insert($peserta);
            $peserta = [];
            for ($p = $awalP; $p < $pesertaP; $p++) {
                if (isset($mahasiswasP[$p])) {
                    $peserta[] = [
                        'mahasiswa_id' => $mahasiswasP[$p]->id,
                        'kelompok_id' => $kelompok->id,
                    ];
                }
            }
            Peserta::insert($peserta);
            $awalL = $pesertaL;
            $awalP = $pesertaP;
            $pesertaL = $pesertaL + $kelipatanL;
            $pesertaP = $pesertaP + $kelipatanP;
            // $awalP = $awalP + $kelipatanP;
            // $pesertaP = $pesertaP + 5;

            // }
            // $coba++;
        }

        return $kelompoks;
        return count($mahasiswasL) . '-' . count($mahasiswasP);

        $peserta = Kelompok::all();

        // return $peserta;
        // $data['peserta'] = $peserta;
    }

    public function peserta($kelompokId)
    {
        $title = 'Peserta';
        $kelompok = Kelompok::with(['peserta.mahasiswa.dataDiri', 'peserta.mahasiswa.prodi'])
            ->where('id', $kelompokId)
            ->first();
        // $pesertas = $pesertas;
        // return $kelompok;
        return view('admin.peserta', compact('title', 'kelompok'));
    }

    public function store(Request $request)
    {
        try {
            //code...
            $data = [
                'mahasiswa_id' => $request->mahasiswa_id,
                'kelompok_id' => $request->kelompok_id
            ];
            $peserta = Peserta::create($data);
            return response()->json([
                'status' => true,
                'message' => 'sukses tambah',
                'data' => $peserta,
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'message' => 'gagal tambah data, coba lagi',
                'data' => [],
            ], 500);
        }
    }
    public function destroy($pesertaId)
    {
        try {
            //code...
            $peserta = Peserta::find($pesertaId)->delete();
            return response()->json([
                'status' => true,
                'message' => 'sukses hapus',
                'data' => $peserta,
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'message' => 'gagal hapus data, coba lagi',
                'data' => [],
            ], 500);
        }
    }
}
