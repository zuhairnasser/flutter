<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                'name' => 'الخرطوم',
                'id' => 1,

            ],
            [
                'name' => 'الجزيرة',
                'id' => 2,

            ],
            [
                'name' => 'نهر النيل',
                'id' => 3,

            ],
            [
                'name' => 'الشمالية',
                'id' => 4,

            ],
            [
                'name' => 'النيل الابيض',
                'id' => 5,

            ],
        );
    }
}
