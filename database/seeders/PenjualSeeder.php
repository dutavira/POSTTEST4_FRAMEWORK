<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjual = [];
        foreach($penjual as $penjual){
            \App\Models\Penjual::firstOrCreate($penjual);
        }
    }
}
