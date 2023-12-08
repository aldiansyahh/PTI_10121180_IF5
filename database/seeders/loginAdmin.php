<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loginAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nameAdmin' => 'Admin',
                'emailAdmin' => 'admin123@gmail.com',
                'passwordAdmin' => bcrypt('admin123'),
            ]
        ];

        DB::table('admin')->insert($data);
    }
}
