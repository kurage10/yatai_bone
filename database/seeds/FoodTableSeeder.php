<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
          'name' => "お好み焼き",
          'name_id' => 'okonomi',
          'price' => 500,
        ]);
        DB::table('foods')->insert([
          'name' => "お好み焼きセット",
          'name_id' => 'okonomi_set',
          'price' => 700,
        ]);
    }
}
