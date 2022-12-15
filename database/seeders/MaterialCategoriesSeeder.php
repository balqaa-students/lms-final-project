<?php

namespace Database\Seeders;

use App\Models\MaterialCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaterialCategory::insert([
            [
                'name' => 'book',
                'is_removable'  => false
            ],
            [
                'name' => 'summary',
                'is_removable'  => false
            ],
            [
                'name' => 'test questions',
                'is_removable'  => false
            ]
        ]);
    }
}
