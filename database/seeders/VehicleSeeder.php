<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = Brand::all();
        foreach ($brands as $brand) {
            \App\Models\Vehicle::factory(3)->create(['brand_id' => $brand->id]);
            
        }
     
     
    }
}

