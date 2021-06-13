<?php

namespace Database\Seeders;

use App\Models\Category;
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
            ['name' => 'Gaz taminoti'],
            ['name' => 'Yo\'llar'],
            ['name' => 'Elektr'],
            ['name' => 'Boshqa'],
        ]);
    }
}