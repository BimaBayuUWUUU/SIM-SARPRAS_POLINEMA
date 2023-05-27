<?php

namespace Database\Seeders;

use App\Models\SaranaPrasarana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaranaPrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaranaPrasarana::create(
            [
                'id_wewenang' => '1',
                'nama' => 'Lantai Barat 01',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '1',
                'nama' => 'Lantai Timur 01',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '1',
                'nama' => 'Bengkel Kerja Bangku Mesin',
                'kapasitas' => '30',
                'fasilitas' => '8 Meja, 30 Kursi, 1 Papan Tulis, 4 Almari, 6 Storage Cabinet, 5 Mesin Pembubut, Set Alat Tatah, Set Alat Ukir, Set Alat Bor, Set Alat Amplas, Set Alat Pahat',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '1',
                'nama' => 'Aula Gedung Teknik Mesin',
                'kapasitas' => '100',
                'fasilitas' => '100 Kursi, 2 Proyektor, 4 AC, 6 Speaker, Set Sound System',
            ]
        );

        SaranaPrasarana::create(
            [
                'id_wewenang' => '2',
                'nama' => 'AD 01',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Meja, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '2',
                'nama' => 'AD 02',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Meja, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '2',
                'nama' => 'Aula Gedung Akuntansi',
                'kapasitas' => '30',
                'fasilitas' => '50 Kursi, 1 Proyektor, Speaker, 2 AC, Set Sound System',
            ]
        );

        SaranaPrasarana::create(
            [
                'id_wewenang' => '3',
                'nama' => 'TS5.08',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '3',
                'nama' => 'TS3.12',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Kursi, 1 Proyektor, 1 AC',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '3',
                'nama' => 'Laboratorium Komputer',
                'kapasitas' => '30',
                'fasilitas' => '1 Papan Tulis, 30 Kursi, 1 Proyektor, 1 AC, 30 Set Komputer',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '3',
                'nama' => 'Multimedia Teknik Sipil',
                'kapasitas' => '60',
                'fasilitas' => '60 Kursi, 2 Proyektor, 4 AC, 4 Speaker, Set Sound System',
            ]
        );

        SaranaPrasarana::create(
            [
                'id_wewenang' => '8',
                'nama' => 'Graha Polinema',
                'kapasitas' => '6000',
                'fasilitas' => '2 Tribun, 8 AC, Set Sound System, 6 Toilet',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '8',
                'nama' => 'Aula Pertamina',
                'kapasitas' => '200',
                'fasilitas' => '200 Kursi, 3 Proyektor, 8 AC, 8 Speaker, Set Sound System, 2 Toilet',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '8',
                'nama' => 'Lapangan Mini Soccer',
                'kapasitas' => '300',
                'fasilitas' => '2 Gawang Sepak Bola',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '8',
                'nama' => 'Masjid Raya An-Nur',
                'kapasitas' => '300',
                'fasilitas' => 'Karpet, Mimbar, 4 Speaker, Set Sound System, 4 Toilet, Tempat Wudhu',
            ]
        );
        SaranaPrasarana::create(
            [
                'id_wewenang' => '8',
                'nama' => 'Graha Theater',
                'kapasitas' => '80',
                'fasilitas' => 'Tribun',
            ]
        );
    }
}
