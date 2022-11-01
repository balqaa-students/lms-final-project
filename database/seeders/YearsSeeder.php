<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::insert([
            [
                'name'          => 'First Year',
                'is_removable'  => false
            ],
            [
                'name'          => 'Second Year',
                'is_removable'  => false
            ],
            [
                'name'          => 'Third Year',
                'is_removable'  => false
            ],
            [
                'name'          => 'Fourth Year',
                'is_removable'  => false
            ],
        ]);
    }
}
