<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adm',
            'email' => 'adm@gmail.com',
            'password' => '$2y$10$jx4SSlhS2CtirCsLw3msy.zivNlA/Ok8/e7.Tk2kpKlSE6SGfSb3S',
            'type' => 3,
        ]);
    }
}
