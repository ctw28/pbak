<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RundownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rundowns')->insert([
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Rapat Senat Pembukaan PBAK',
                'tanggal' => '2023-08-18',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '09:00:00',
                'pemateri' => '-',
                'moderator' => '-',
                'pic' => 'Hasfikin',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Membangun Karakter Intelektual Muda yang inovatif, kreatif, dan adaptif di era 5.0',
                'tanggal' => '2023-08-18',
                'waktu_mulai' => '09:00:00',
                'waktu_selesai' => '12:00:00',
                'pemateri' => 'Indri Ananda Hasanah',
                'moderator' => '-',
                'pic' => '',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Pengenalan Layanan Digitalisasi TIPD Kampus',
                'tanggal' => '2023-08-18',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
                'pemateri' => 'TIPD',
                'moderator' => '-',
                'pic' => '',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Absen Sore (Tanggal 18)',
                'tanggal' => '2023-08-18',
                'waktu_mulai' => '16:30:00',
                'waktu_selesai' => '17:00:00',
                'pemateri' => 'TIPD',
                'moderator' => '-',
                'pic' => '',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Implementasi dan Penguatan Moderasi Beragama di Perguruan Tinggi',
                'tanggal' => '2023-08-19',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
                'pemateri' => 'MUI',
                'moderator' => 'SEMA',
                'pic' => 'Hj. Ernida',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Dinamika Kelompok (Moderasi Beragama)',
                'tanggal' => '2023-08-19',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
                'pemateri' => 'Dr. Akbar, Ahmad Ridha',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Impementasi Nilai-Nilai Kebangsaan Bagi Mahasiswa',
                'tanggal' => '2023-08-19',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
                'pemateri' => 'Polda Sultra',
                'moderator' => 'DEMA',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Sosialisasi Program Internasionalisasi Kampus',
                'tanggal' => '2023-08-19',
                'waktu_mulai' => '15:30:00',
                'waktu_selesai' => '16:30:00',
                'pemateri' => 'Anita Rezki',
                'moderator' => 'UKM Bahasa',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Absen Sore (Tanggal 19)',
                'tanggal' => '2023-08-19',
                'waktu_mulai' => '16:30:00',
                'waktu_selesai' => '17:30:00',
                'pemateri' => '-',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Literasi Lembaga Kemahasiswaan Extra Kampus',
                'tanggal' => '2023-08-20',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '09:30:00',
                'pemateri' => 'HMI, PMII, IMM',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Literasi Lembaga Kemahasiswaan Intra Kampus',
                'tanggal' => '2023-08-20',
                'waktu_mulai' => '09:30:00',
                'waktu_selesai' => '12:00:00',
                'pemateri' => 'DEMA-SEMA',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Unjuk Kreatifitas UKK, UKM',
                'tanggal' => '2023-08-20',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
                'pemateri' => 'UKK-UKM',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Unjuk Kreatifitas UKK, UKM Lanjutan',
                'tanggal' => '2023-08-20',
                'waktu_mulai' => '15:30:00',
                'waktu_selesai' => '16:30:00',
                'pemateri' => 'UKK-UKM',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Absen Sore (Tanggal 20)',
                'tanggal' => '2023-08-20',
                'waktu_mulai' => '16:30:00',
                'waktu_selesai' => '17:30:00',
                'pemateri' => '-',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Pentas Kreatifitas Mahasiswa Baru',
                'tanggal' => '2023-08-21',
                'waktu_mulai' => '09:00:00',
                'waktu_selesai' => '12:00:00',
                'pemateri' => 'UKM Seni',
                'moderator' => '-',
                'pic' => '-',
                'keterangan' => '-',
            ],
            [
                'pbak_id' => 1,
                'kegiatan_nama' => 'Rapat Senat Terbuka Penutupan, Pengukuhan Mahasiswa Baru & Pembukaan Kuliah PBAK tahun 2023',
                'tanggal' => '2023-08-21',
                'waktu_mulai' => '15:30:00',
                'waktu_selesai' => '16:30:00',
                'pemateri' => '-',
                'moderator' => '-',
                'pic' => 'Hasfikin',
                'keterangan' => '-',
            ]
        ]);

        // DB::table('absen_sesis')->insert([
        //     [
        //         'kelompok_id' => 1,
        //         'rundown_id' => 1,
        //         'sesi_nama' => 'Sesi 1',
        //         'is_open' => 1,
        //         'is_selesai' => 0,
        //     ],
        // ]);
    }
}
