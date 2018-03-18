<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        factory(App\Country::class, 20)->create()->each(function ($country) {
            $country->cities()->save(factory(App\City::class)->make())->each(function ($city) {
                $city->products()->save(factory(App\Products::class)->make());
            });
        }); 
    }    
}