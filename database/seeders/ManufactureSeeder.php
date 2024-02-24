<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacture;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manufactures = [
            ["name" => "HONDA"],
            ["name" => "YAMAHA"],
            ["name" => "SUZUKI"],
            ["name" => "KAWASAKI"],
        ];

        foreach ($manufactures as $manufacture) {
            Manufacture::create($manufacture);
    }
}
}
