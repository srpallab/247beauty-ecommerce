<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShipDivision;

class ShipDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $slug = uniqid('ship-division-15');
        
        ShipDivision::insert([
            [
                "id" => 1,
                "division_slug" => $slug,
                "division_name" => "Dhaka",
                "bn_division_name" => "ঢাকা",
                "charge" => 60,
            ],
            [
                "id" => 2,
                "division_slug" => $slug,
                "division_name" => "Chittagong",
                "bn_division_name" => "চট্টগ্রাম",
                "charge" => 120
            ],
            [
                "id" => 3,
                "division_slug" => $slug,
                "division_name" => "Rajshahi",
                "bn_division_name" => "রাজশাহী",
                "charge" => 120
            ],
            [
                "id" => 4,
                "division_slug" => $slug,
                "division_name" => "Khulna",
                "bn_division_name" => "খুলনা",
                "charge" => 120
            ],
            [
                "id" => 5,
                "division_slug" => $slug,
                "division_name" => "Barisal",
                "bn_division_name" => "বরিশাল",
                "charge" => 120
            ],
            [
                "id" => 6,
                "division_slug" => $slug,
                "division_name" => "Rangpur",
                "bn_division_name" => "রংপুর",
                "charge" => 120
            ],
            [
                "id" => 7,
                "division_slug" => $slug,
                "division_name" => "Sylhet",
                "bn_division_name" => "সিলেট",
                "charge" => 120
            ],

            [
                "id" => 8,
                "division_slug" => $slug,
                "division_name" => "Mymensingh",
                "bn_division_name" => "ময়মনসিংহ",
                "charge" => 120
            ]
        ]);
    }
}
