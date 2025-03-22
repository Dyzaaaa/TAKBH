<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DataPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('datapasien')->insert([
            [
                'nama_pasien' => 'Wowo',
                'tanggal_lahir' => '2000-01-01',
                'usia' => 20,
                'no_hp' => '081245671234',
                'NIK' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pasien' => 'Wiwi',
                'tanggal_lahir' => '2000-02-02',
                'usia' => 30,
                'no_hp' => '081212345678',
                'NIK' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pasien' => 'Wawa',
                'tanggal_lahir' => '2000-03-03',
                'usia' => 40,
                'no_hp' => '081398765432',
                'NIK' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
