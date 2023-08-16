<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // return;
        // \App\Models\User::factory(10)->create();
        $fatik = "Fakultas Tarbiyah dan Ilmu Keguruan";
        $febi = "Fakultas Ekonomi dan Bisnis Islam";
        $fasya = "Fakultas Syariah";
        $fuad = "Fakultas Ushuluddin Adab dan Dakwah";
        $pascasarjana = "Pascasarjana";


        DB::table('user_roles')->insert([
            ['nama_role' => 'admin'],
            ['nama_role' => 'dosen'],
            ['nama_role' => 'mahasiswa']
        ]);

        DB::table('tahun_akademiks')->insert([
            ['tahun' => 2022, "semester" => "Ganjil", "sebutan" => "Tahun Akademik 2022/2023 Ganjil", "kode" => "20221"],
            ['tahun' => 2022, "semester" => "Genap", "sebutan" => "Tahun Akademik 2022/2023 Genap", "kode" => "20222"],
            ['tahun' => 2023, "semester" => "Ganjil", "sebutan" => "Tahun Akademik 2023/2024 Ganjil", "kode" => "20231"],
        ]);

        DB::table('master_jenjangs')->insert([
            [
                "jenjang_nama" => "Strata 1",
                "jenjang_singkatan" => "S1",
                "jenjang_gelar" => "Sarjana",
                "jenjang_kode_dikti" => "30",
                "sebutan_tugas_akhir" => "Skripsi",
            ],
            [
                "jenjang_nama" => "Strata 2",
                "jenjang_singkatan" => "S2",
                "jenjang_gelar" => "Magister",
                "jenjang_kode_dikti" => "35",
                "sebutan_tugas_akhir" => "Tesis",
            ],
            [
                "jenjang_nama" => "Strata 3",
                "jenjang_singkatan" => "S3",
                "jenjang_gelar" => "Doktor",
                "jenjang_kode_dikti" => "0",
                "sebutan_tugas_akhir" => "Disertasi",
            ],
        ]);

        DB::table('master_fakultas')->insert([
            [
                "master_jenjang_id" => 1,
                "fakultas_nama" => $fatik,
                "fakultas_singkatan" => "FTIK",
                "is_fakultas" => "1",
                "fakultas_visi" => "Visi Fakultas $fatik",
                "fakultas_misi" => "Misi Fakultas $fatik",
                "fakultas_keterangan" => "Keterangan Fakultas",
            ],
            [
                "master_jenjang_id" => 1,
                "fakultas_nama" => $febi,
                "fakultas_singkatan" => "FEBI",
                "is_fakultas" => "1",
                "fakultas_visi" => "Visi Fakultas $febi",
                "fakultas_misi" => "Misi Fakultas $febi",
                "fakultas_keterangan" => "Keterangan Fakultas",
            ],
            [
                "master_jenjang_id" => 1,
                "fakultas_nama" => $fasya,
                "fakultas_singkatan" => "FAKSYA",
                "is_fakultas" => "1",
                "fakultas_visi" => "Visi Fakultas $fasya",
                "fakultas_misi" => "Misi Fakultas $fasya",
                "fakultas_keterangan" => "Keterangan Fakultas",
            ],
            [
                "master_jenjang_id" => 1,
                "fakultas_nama" => $fuad,
                "fakultas_singkatan" => "FUAD",
                "is_fakultas" => "1",
                "fakultas_visi" => "Visi Fakultas $fuad",
                "fakultas_misi" => "Misi Fakultas $fuad",
                "fakultas_keterangan" => "Keterangan Fakultas",
            ],
            [
                "master_jenjang_id" => 2,
                "fakultas_nama" => $pascasarjana,
                "fakultas_singkatan" => "PASCASARJANA",
                "is_fakultas" => "0",
                "fakultas_visi" => "Visi Fakultas $pascasarjana",
                "fakultas_misi" => "Misi Fakultas $pascasarjana",
                "fakultas_keterangan" => "Keterangan PASCASARJANA",
            ],
        ]);

        DB::table('master_prodis')->insert([

            [
                "master_fakultas_id" => 5,
                "prodi_kode" => "ESY",
                "prodi_nama" => "Ekonomi Syariah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_urutan" => 1,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 5,
                "prodi_kode" => "HI",
                "prodi_nama" => "Hukum Keluarga Islam (Ahwal Syakhshiyyah)",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 5,
                "prodi_kode" => "MPI",
                "prodi_nama" => "Manajemen Pendidikan Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 5,
                "prodi_kode" => "PAIS",
                "prodi_nama" => "Pendidikan Agama Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "BING",
                "prodi_nama" => "Tadris Bahasa Inggris",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "BLG",
                "prodi_nama" => "Tadris Biologi",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "FSK",
                "prodi_nama" => "Tadris Fisika",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "IPA",
                "prodi_nama" => "Tadris IPA",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "KI",
                "prodi_nama" => "Manajemen Pendidikan Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "MTK",
                "prodi_nama" => "Tadris Matematika",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PAI",
                "prodi_nama" => "Pendidikan Agama Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PAID",
                "prodi_nama" => "Pendidikan Agama Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan",
                "is_aktif" => false
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PBA",
                "prodi_nama" => "Pendidikan Bahasa Arab",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PGMI",
                "prodi_nama" => "Pendidikan Guru Madrasah Ibtidaiyah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PGMID",
                "prodi_nama" => "Pendidikan Guru Madrasah Ibtidaiyah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PGRA",
                "prodi_nama" => "Pendidikan Islam Anak Usia Dini",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 1,
                "prodi_kode" => "PGRAD",
                "prodi_nama" => "Pendidikan Guru Raudhatul Athfal",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan",
                "is_aktif" => false
            ],
            [
                "master_fakultas_id" => 3,
                "prodi_kode" => "AS",
                "prodi_nama" => "Hukum Keluarga Islam (Ahwal Syakhshiyyah)",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 3,
                "prodi_kode" => "HTN",
                "prodi_nama" => "Hukum Tatanegara (Siyasah Syar'iyyah)",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 3,
                "prodi_kode" => "MU",
                "prodi_nama" => "Hukum Ekonomi Syariah (Mua'malah)",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "BPI",
                "prodi_nama" => "Bimbingan Penyuluhan Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "IHD",
                "prodi_nama" => "Ilmu Hadis",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan",
                "is_aktif" => false
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "IQT",
                "prodi_nama" => "Ilmu Al-Qur'an dan Tafsir",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "KPI",
                "prodi_nama" => "Komunikasi dan Penyiaran Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "MD",
                "prodi_nama" => "Manajemen Dakwah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "PMI",
                "prodi_nama" => "Pengembangan Masyarakat Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 4,
                "prodi_kode" => "SKI",
                "prodi_nama" => "Sejarah dan Kebudayaan Islam",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan",
                "is_aktif" => false
            ],
            [
                "master_fakultas_id" => 2,
                "prodi_kode" => "EI",
                "prodi_nama" => "Ekonomi Syariah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 2,
                "prodi_kode" => "MBS",
                "prodi_nama" => "Manajemen Bisnis Syariah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ],
            [
                "master_fakultas_id" => 2,
                "prodi_kode" => "PBS",
                "prodi_nama" => "Perbankan Syariah",
                "prodi_visi" => "visi",
                "prodi_misi" => "misi", "prodi_urutan" => 1, "is_aktif" => true,
                "prodi_keterangan" => "keterangan"
            ]

        ]);

        DB::table('tahun_akademiks')->insert([
            ['tahun' => 2022, "semester" => "Genap", "sebutan" => "Tahun Akademik 2021/2022 Genap", "kode" => "20212"],
        ]);

        DB::table('pbaks')->insert([
            'tahun_akademik_id' => 1,
            'pbak_nama' => 'PBAK 2023',
            'pbak_keterangan' => ''
        ]);


        $kelompok = [];
        for ($i = 1; $i <= 28; $i++) {
            $kelompok[] = [
                'pbak_id' => 1,
                'kelompok_nama' => "Pleton " . $i,
                'ketua' => '',
                'keterangan' => ''
            ];
        }
        DB::table('kelompoks')->insert($kelompok);
    }
}
