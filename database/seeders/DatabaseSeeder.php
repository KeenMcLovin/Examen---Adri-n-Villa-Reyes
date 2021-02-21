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
        \App\Models\User::factory(10)->create();
        \App\Models\category::factory(10)->create();
        \App\Models\tag::factory(10)->create();
        \App\Models\posttags::factory(10)->create();
        \App\Models\post::factory(10)->create();
    }
}
