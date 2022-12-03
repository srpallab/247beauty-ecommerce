<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShipDistrict;

class ShipDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $slug = uniqid('ship-district-15');

        ShipDistrict::insert([
            [
                "id" => 1,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Narsingdi",
                "bn_district_name" => "নরসিংদী"
            ],
            [
                "id" => 2,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Gazipur",
                "bn_district_name" => "গাজীপুর"
            ],
            [
                "id" => 3,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Shariatpur",
                "bn_district_name" => "শরীয়তপুর"
            ],
            [
                "id" => 4,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Narayanganj",
                "bn_district_name" => "নারায়ণগঞ্জ"
            ],
            [
                "id" => 5,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Tangail",
                "bn_district_name" => "টাঙ্গাইল"
            ],
            [
                "id" => 6,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Kishoreganj",
                "bn_district_name" => "কিশোরগঞ্জ"
            ],
            [
                "id" => 7,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Manikganj",
                "bn_district_name" => "মানিকগঞ্জ"
            ],
            [
                "id" => 8,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Dhaka",
                "bn_district_name" => "ঢাকা"
            ],
            [
                "id" => 9,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Munshiganj",
                "bn_district_name" => "মুন্সিগঞ্জ"
            ],
            [
                "id" => 10,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Rajbari",
                "bn_district_name" => "রাজবাড়ী"
            ],
            [
                "id" => 11,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Madaripur",
                "bn_district_name" => "মাদারীপুর"
            ],
            [
                "id" => 12,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Gopalganj",
                "bn_district_name" => "গোপালগঞ্জ"
            ],
            [
                "id" => 13,
                "district_slug" => $slug,
                "division_id" => 1,
                "district_name" => "Faridpur",
                "bn_district_name" => "ফরিদপুর"
            ],
            [
                "id" => 14,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Comilla",
                "bn_district_name" => "কুমিল্লা"
            ],
            [
                "id" => 15,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Feni",
                "bn_district_name" => "ফেনী"
            ],
            [
                "id" => 16,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Brahmanbaria",
                "bn_district_name" => "ব্রাহ্মণবাড়িয়া"
            ],
            [
                "id" => 17,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Rangamati",
                "bn_district_name" => "রাঙ্গামাটি"
            ],
            [
                "id" => 18,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Noakhali",
                "bn_district_name" => "নোয়াখালী"
            ],
            [
                "id" => 19,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Chandpur",
                "bn_district_name" => "চাঁদপুর"
            ],
            [
                "id" => 20,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Lakshmipur",
                "bn_district_name" => "লক্ষ্মীপুর"
            ],
            [
                "id" => 21,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Chittagong",
                "bn_district_name" => "চট্টগ্রাম"
            ],
            [
                "id" => 22,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Coxsbazar",
                "bn_district_name" => "কক্সবাজার"
            ],
            [
                "id" => 23,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Khagrachhari",
                "bn_district_name" => "খাগড়াছড়ি"
            ],
            [
                "id" => 24,
                "district_slug" => $slug,
                "division_id" => 2,
                "district_name" => "Bandarban",
                "bn_district_name" => "বান্দরবান"
            ],
            [
                "id" => 25,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Sirajganj",
                "bn_district_name" => "সিরাজগঞ্জ"
            ],
            [
                "id" => 26,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Pabna",
                "bn_district_name" => "পাবনা"
            ],
            [
                "id" => 27,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Bogra",
                "bn_district_name" => "বগুড়া"
            ],
            [
                "id" => 28,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Rajshahi",
                "bn_district_name" => "রাজশাহী"
            ],
            [
                "id" => 29,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Natore",
                "bn_district_name" => "নাটোর"
            ],
            [
                "id" => 30,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Joypurhat",
                "bn_district_name" => "জয়পুরহাট"
            ],
            [
                "id" => 31,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Chapainawabganj",
                "bn_district_name" => "চাঁপাইনবাবগঞ্জ"
            ],
            [
                "id" => 32,
                "district_slug" => $slug,
                "division_id" => 3,
                "district_name" => "Naogaon",
                "bn_district_name" => "নওগাঁ"
            ],
            [
                "id" => 33,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Jessore",
                "bn_district_name" => "যশোর"
            ],
            [
                "id" => 34,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Satkhira",
                "bn_district_name" => "সাতক্ষীরা"
            ],
            [
                "id" => 35,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Meherpur",
                "bn_district_name" => "মেহেরপুর"
            ],
            [
                "id" => 36,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Narail",
                "bn_district_name" => "নড়াইল"
            ],
            [
                "id" => 37,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Chuadanga",
                "bn_district_name" => "চুয়াডাঙ্গা"
            ],
            [
                "id" => 38,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Kushtia",
                "bn_district_name" => "কুষ্টিয়া"
            ],
            [
                "id" => 39,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Magura",
                "bn_district_name" => "মাগুরা"
            ],
            [
                "id" => 40,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Khulna",
                "bn_district_name" => "খুলনা"
            ],
            [
                "id" => 41,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Bagerhat",
                "bn_district_name" => "বাগেরহাট"
            ],
            [
                "id" => 42,
                "district_slug" => $slug,
                "division_id" => 4,
                "district_name" => "Jhenaidah",
                "bn_district_name" => "ঝিনাইদহ"
            ],
            [
                "id" => 43,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Jhalakathi",
                "bn_district_name" => "ঝালকাঠি"
            ],
            [
                "id" => 44,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Patuakhali",
                "bn_district_name" => "পটুয়াখালী"
            ],
            [
                "id" => 45,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Pirojpur",
                "bn_district_name" => "পিরোজপুর"
            ],
            [
                "id" => 46,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Barisal",
                "bn_district_name" => "বরিশাল"
            ],
            [
                "id" => 47,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Bhola",
                "bn_district_name" => "ভোলা"
            ],
            [
                "id" => 48,
                "district_slug" => $slug,
                "division_id" => 5,
                "district_name" => "Barguna",
                "bn_district_name" => "বরগুনা"
            ],
            [
                "id" => 49,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Panchagarh",
                "bn_district_name" => "পঞ্চগড়"
            ],
            [
                "id" => 50,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Dinajpur",
                "bn_district_name" => "দিনাজপুর"
            ],
            [
                "id" => 51,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Lalmonirhat",
                "bn_district_name" => "লালমনিরহাট"
            ],
            [
                "id" => 52,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Nilphamari",
                "bn_district_name" => "নীলফামারী"
            ],
            [
                "id" => 53,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Gaibandha",
                "bn_district_name" => "গাইবান্ধা"
            ],
            [
                "id" => 54,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Thakurgaon",
                "bn_district_name" => "ঠাকুরগাঁও"
            ],
            [
                "id" => 55,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Rangpur",
                "bn_district_name" => "রংপুর"
            ],
            [
                "id" => 56,
                "district_slug" => $slug,
                "division_id" => 6,
                "district_name" => "Kurigram",
                "bn_district_name" => "কুড়িগ্রাম"
            ],
            [
                "id" => 57,
                "district_slug" => $slug,
                "division_id" => 7,
                "district_name" => "Sylhet",
                "bn_district_name" => "সিলেট"
            ],
            [
                "id" => 58,
                "district_slug" => $slug,
                "division_id" => 7,
                "district_name" => "Moulvibazar",
                "bn_district_name" => "মৌলভীবাজার"
            ],
            [
                "id" => 59,
                "district_slug" => $slug,
                "division_id" => 7,
                "district_name" => "Habiganj",
                "bn_district_name" => "হবিগঞ্জ"
            ],
            [
                "id" => 60,
                "district_slug" => $slug,
                "division_id" => 7,
                "district_name" => "Sunamganj",
                "bn_district_name" => "সুনামগঞ্জ"
            ],
            [
                "id" => 61,
                "district_slug" => $slug,
                "division_id" => 8,
                "district_name" => "Sherpur",
                "bn_district_name" => "শেরপুর"
            ],
            [
                "id" => 62,
                "district_slug" => $slug,
                "division_id" => 8,
                "district_name" => "Mymensingh",
                "bn_district_name" => "ময়মনসিংহ"
            ],
            [
                "id" => 63,
                "district_slug" => $slug,
                "division_id" => 8,
                "district_name" => "Jamalpur",
                "bn_district_name" => "জামালপুর"
            ],
            [
                "id" => 64,
                "district_slug" => $slug,
                "division_id" => 8,
                "district_name" => "Netrokona",
                "bn_district_name" => "নেত্রকোণা"
            ]
        ]);
    }
}
