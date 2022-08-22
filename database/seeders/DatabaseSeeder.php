<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Stringable;

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
        DB::table('users')->insert([
            'name' => ('admin'),
            'email' =>  'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        DB::table('users')->insert([
            'name' => ('saul'),
            'email' =>  'saul@saul.com',
            'password' => bcrypt('saul')
        ]);
        DB::table('users')->insert([
            'name' => ('sunflower'),
            'email' =>  'sunflower@sunflower.com',
            'password' => bcrypt('sunflower')
        ]);
        $this->call([
            UserSeeder::class,
        ]);
    }
}
