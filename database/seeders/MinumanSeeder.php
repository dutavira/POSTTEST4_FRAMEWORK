<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minuman = [
            
        ];
        foreach($minuman as $minuman){
            \App\Models\Minuman::firstOrCreate($minuman);
        }
    }
}
