<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbelhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abelhas')->insert([
            [ 'nome' => 'Uruçu (Melipona scutellaris)', ],
            [ 'nome' => 'Uruçu-Amarela (Melipona rufiventris)', ],
            [ 'nome' => 'Guarupu (Melipona bicolor)', ],
            [ 'nome' => 'Iraí (Nannotrigona testaceicornes)', ],
        ]);
    }
}
