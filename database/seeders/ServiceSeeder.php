<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\ Facades\DB;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = \Faker\Factory::create('ar_SA'); // create a Arabic Saudi faker
        for ($i = 0; $i < 10; $i++) {
            echo $faker->name, "<br>";
        }*/
        $faker= Faker::create();
        foreach (range(1,10) as $value)
        {
            DB::table('services')->insert([
             'title'=>$faker->word(2),
             'summary'=>$faker->sentence(2),
             'slug'=>$faker->word(3),
             //'image'=>$faker->image(),
             'details'=>$faker->sentence(4),
             'Active'=>($value%2),
            ]);
        }
    }
}
