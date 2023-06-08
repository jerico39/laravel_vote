<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MasterTableSeeder::class);
      //  $this->call(TexIDTableSeeder::class);
      //  $this->call(ResultTableSeeder::class);
      //  $this->call(PswTableSeeder::class);
    }
}
