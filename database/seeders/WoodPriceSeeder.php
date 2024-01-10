<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Wood;


class WoodPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('woods')->insert([
        // 築年数
        'building_age' => '47',
        // 建築標準価格
        'wood_price' => '31.2',
        ],
        [
        'building_age' => '46',
        'wood_price' => '34.2',
        ],
        [
        'building_age' => '45',
        'wood_price' => '45.3',
        ],
        [
        'building_age' => '44',
        'wood_price' => '61.8',
        ],
        [
        'building_age' => '43',
        'wood_price' => '67.7',
        ],
        [
        'building_age' => '42',
        'wood_price' => '70.3',
        ],
         [
        'building_age' => '41',
        'wood_price' => '74.1',
        ],
        [
        'building_age' => '40',
        'wood_price' => '77.9',
        ],
        [
        'building_age' => '39',
        'wood_price' => '82.5',
        ],
         [
        'building_age' => '38',
        'wood_price' => '92.5',
        ],
        [
        'building_age' => '37',
        'wood_price' => '98.3',
        ],
         [
        'building_age' => '36',
        'wood_price' => '101.3',
        ],
         [
        'building_age' => '35',
        'wood_price' => '102.2',
        ],
         [
        'building_age' => '34',
        'wood_price' => '102.8',
        ],
         [
        'building_age' => '33',
        'wood_price' => '104.2',
        ],
         [
        'building_age' => '32',
        'wood_price' => '110',//大きく増えてるので110は間違い？
        ],
         [
        'building_age' => '31',
        'wood_price' => '106.2',//減ってる
        ],
        [
        'building_age' => '30',
        'wood_price' => '116.2',
        ],
        [
        'building_age' => '29',
        'wood_price' => '123.1',
        ],
        [
        'building_age' => '29',
        'wood_price' => '123.2',
        ],
         [
        'building_age' => '28',
        'wood_price' => '131.2',
        ],
         [
        'building_age' => '27',
        'wood_price' => '137.6',
        ],
        [
        'building_age' => '26',
        'wood_price' => '143.5',
        ],
        [
        'building_age' => '25',
        'wood_price' => '150.9',
        ],
         [
        'building_age' => '24',
        'wood_price' => '156.6',
        ],
        [
        'building_age' => '23',
        'wood_price' => '158.3',
        ],
        [
        'building_age' => '22',
        'wood_price' => '161',
        ],
         [
        'building_age' => '21',
        'wood_price' => '160.5',
        ],
        [
        'building_age' => '20',
        'wood_price' => '158.6',
        ],
         [
        'building_age' => '19',
        'wood_price' => '159.3',//増えてる
        ],
         [
        'building_age' => '18',
        'wood_price' => '159',//減ってる
        ],
        [
        'building_age' => '17',
        'wood_price' => '157.2',
        ],
        [
        'building_age' => '16',
        'wood_price' => '153.6',
        ],
        [
        'building_age' => '15',
        'wood_price' => '152.7',
        ],
        [
        'building_age' => '14',
        'wood_price' => '152.1',
        ],
        [
        'building_age' => '13',
        'wood_price' => '151.9',
        ],
        [
        'building_age' => '12',
        'wood_price' => '152.9',
        ],
        [
        'building_age' => '11',
        'wood_price' => '153.6',
        ],
        [
        'building_age' => '10',
        'wood_price' => '156',
        ],
        [
        'building_age' => '9',
        'wood_price' => '156.6',
        ],
        [
        'building_age' => '8',
        'wood_price' => '156.5',//減ってる
        ],
        [
        'building_age' => '7',
        'wood_price' => '156.8',
        ],
        [
        'building_age' => '6',
        'wood_price' => '157.6',
        ],
        [
        'building_age' => '5',
        'wood_price' => '159.9',
        ],
        [
        'building_age' => '4',
        'wood_price' => '163',
        ],
        [
        'building_age' => '3',
        'wood_price' => '165.4',
        ],
        [
        'building_age' => '2',
        'wood_price' => '165.4',
        ],
        [
        'building_age' => '1',
        'wood_price' => '165.4',
        ]
);
}
}
