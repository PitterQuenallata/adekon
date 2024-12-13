<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['first_name'=>'juan', 'last_name'=>'perez', 'last_mader_name'=>'gomez', 'username'=>'admin', 'telefono'=>'70000001', 'email'=>'admin@gmail.com', 'password'=>bcrypt('admin'),'role_id'=>1],
            ['first_name'=>'maria', 'last_name'=>'gomez', 'last_mader_name'=>'perez','username'=>'maria123', 'telefono'=>'60000001',  'email'=>'maria@gmail.com', 'password'=>bcrypt('maria123'),'role_id'=>2],

        ]);
    }
}
