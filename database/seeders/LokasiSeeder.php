<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasis')->insert([
            'negara' => 'indonesia',
            'provinsi' => 'ntb',
            'kabupaten' => 'lobar',
            'kecamatan' => 'sandubaya',
            'desa' => 'seganteng',
            'dusun' => 'getap',
            'kodepos' => '87667',
        ]);
    }
}
