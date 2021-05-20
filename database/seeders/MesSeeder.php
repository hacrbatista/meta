<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meses')->insert([
            [ 'nome' => 'Janeiro', ],
            [ 'nome' => 'Fevereiro', ],
            [ 'nome' => 'Março', ],
            [ 'nome' => 'Abril', ],
            [ 'nome' => 'Maio', ],
            [ 'nome' => 'Junho', ],
            [ 'nome' => 'Julho', ],
            [ 'nome' => 'Agosto', ],
            [ 'nome' => 'Setembro', ],
            [ 'nome' => 'Outubro', ],
            [ 'nome' => 'Novembro', ],
            [ 'nome' => 'Dezembro', ],
        ]);
    }
}
