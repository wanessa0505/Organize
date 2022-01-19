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
        DB::table('status')->insert([
            'status' => 'Não iniciado'
        ]);
        DB::table('status')->insert([
            'status' => 'Em processo'
        ]);
        DB::table('status')->insert([
            'status' => 'Finalizado'
        ]);
    }
}
