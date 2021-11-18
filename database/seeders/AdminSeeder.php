<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [

                'name' => "HN",
                'price' => 2.1,
                'avatar' => 'asdasd',
            ],
            [

                'name' => "Vinhomes",
                'price' => 3.1,
                'avatar' => 'qweqw',
            ],
            [

                'name' => "Neverland",
                'price' => 4.1,
                'thumbnail' => 'zxc',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
