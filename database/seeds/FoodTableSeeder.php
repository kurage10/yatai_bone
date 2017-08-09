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
          'name' => "焼きそば",
          'name_id' => 'soba',
          'price' => 500,
        ]);
        DB::table('foods')->insert([
          'name' => "焼きそばセット",
          'name_id' => 'soba_set',
          'price' => 700,
        ]);
    }
}
