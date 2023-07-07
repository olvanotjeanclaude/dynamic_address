<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            "BURSA",
            "ANKARA"
        ];

        foreach ($provinces as $key => $province) {
            Province::create(["name" => $province]);
        }
    }
}
