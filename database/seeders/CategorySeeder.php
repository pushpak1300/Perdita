<?php

namespace Database\Seeders;

use DB;
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
        DB::table('categories')->insert([
            [
                'text' => 'Electronics',
            ],
            [
                'text' => 'Jewellery',
            ],
            [
                'text' => 'Pets'
            ],
            [
                'text'=> 'Documents'
            ],
            [
                'text'=> 'Luggage'
            ],
            [
                'text'=> 'Automobile'
            ],
            [
                'text'=> 'Watches'
            ],
        ]);
    }
}
