<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = ['Bug', 'Fix', 'Implementation', 'New Feature', 'Layout'];

        foreach ($labels as $label) {
            $category = new Category();

            $category->label = $label;


            $category->save();
        }
    }
}
