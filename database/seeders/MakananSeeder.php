<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makanan = [];
        foreach($makanan as $makanan){
            \App\Models\Makanan::firstOrCreate($makanan);
        }
    }
}
