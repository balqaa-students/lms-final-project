<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name'          => 'compulsory major',
                'is_removable'  => false
            ],
            [
                'name'          => 'Optional major',
                'is_removable'  => false
            ],
            [
                'name'          => 'Compulsory university requirement',
                'is_removable'  => false
            ],
            [
                'name'          => 'optional university requirement',
                'is_removable'  => false
            ],
            [
                'name'          => 'Compulsory college requirement',
                'is_removable'  => false
            ],
            [
                'name'          => 'Compulsory support materials',
                'is_removable'  => false
            ],
            [
                'name'          => 'Compulsory remedial materials',
                'is_removable'  => false
            ],
        ]);
    }
}
