<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataDiri;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\UserMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function sinkron(Request $request)
    {
        DB::beginTransaction();

        try {

            $data = json_decode($request->data);
            // $foto = json_decode($data->foto);

            $prodis = [
                "ESY",
                "HI",
                "MPI",
                "PAIS",
                "BING",
                "BLG",
                "FSK",
                "IPA",
                "KI",
                "MTK",
                "PAI",
                "PAID",
                "PBA",
                "PGMI",
                "PGMID",
                "PGRA",
                "PGRAD",
                "AS",
                "HTN",
                "MU",
                "BPI",
                "IHD",
                "IQT",
                "KPI",
                "MD",
                "PMI",
                "SKI",
                "EI",
                "MBS",
                "PBS"
            ];

            $cariProdi = $data->idprodi;
            $prodi = array_search($cariProdi, $prodis);

            $defaultFoto = 'https://sia.iainkendari.ac.id/assets/template/admincore/assets/images/user_bg.png';
            // return $foto->path;
            $check = Mahasiswa::where([
                'iddata' => $data->iddata,
                'nim' => $data->nim
            ]);

            if ($check->count() > 0)
                return response()->json([
                    'status' => true,
                    'message' => 'Data sudah ada',
                    'data' => $check->get(),
                ], 200);

            // ini jika datanya belum ada, maka insert data diri, mahasiswa, dan user
            $dataDiri = DataDiri::create([
                'nama_lengkap' => $data->nama,
                'jenis_kelamin' => $data->kelamin,
                'lahir_tempat' => $data->tmplahir,
                'lahir_tanggal' => $data->tgllahir,
                'no_hp' => $data->hp,
                'alamat_ktp' => $data->alamat,
                'alamat_domisili' => $data->alamat,
                'foto' => $defaultFoto,
                // 'foto' => ($foto == null) ? $defaultFoto : 'https://sia.iainkendari.ac.id/' . $foto->path,
            ]);

            $mahasiswa = Mahasiswa::create([
                "iddata" => $data->iddata,
                "nim" => $data->nim,
                "data_diri_id" => $dataDiri->id,
                "master_prodi_id" => $prodi + 1,
            ]);

            $user = User::create([
                "username" => $data->nim,
                "password" => bcrypt($data->nim),
                "user_role_id" => 3,
            ]);
            $userMahasiswa = UserMahasiswa::create([
                "user_id" => $user->id,
                "mahasiswa_id" => $mahasiswa->id,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'sukses import',
                'data' => $dataDiri,
            ], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
