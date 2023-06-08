<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class masterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A1',
            'value' => 0,
        ];
        DB::table('master')->insert($param);
    }
}
