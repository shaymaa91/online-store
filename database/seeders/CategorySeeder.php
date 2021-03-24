<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++)
        {

            \App\Models\Category::create([
                'name' => Str::random(10),
                'Active'=>($i%2),
        ]);  

        }
     
    }
}
