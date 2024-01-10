<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgsPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('lgss')->insert([
        // 築年数
        'building_age' => '47',
        // 建築標準価格
        'lgs_price' => '31.2',
        ],
        [
        'building_age' => '46',
        'lgs_price' => '34.2',
        ],
        [
        'building_age' => '45',
        'lgs_price' => '45.3',
        ],
        [
        'building_age' => '44',
        'lgs_price' => '61.8',
        ],
        [
        'building_age' => '43',
        'lgs_price' => '67.7',
        ],
        [
        'building_age' => '42',
        'lgs_price' => '70.3',
        ],
         [
        'building_age' => '41',
        'lgs_price' => '74.1',
        ],
        [
        'building_age' => '40',
        'lgs_price' => '77.9',
        ],
        [
        'building_age' => '39',
        'lgs_price' => '82.5',
        ],
         [
        'building_age' => '38',
        'lgs_price' => '92.5',
        ],
        [
        'building_age' => '37',
        'lgs_price' => '98.3',
        ],
         [
        'building_age' => '36',
        'lgs_price' => '101.3',
        ],
         [
        'building_age' => '35',
        'lgs_price' => '102.2',
        ],
         [
        'building_age' => '34',
        'lgs_price' => '102.8',
        ],
         [
        'building_age' => '33',
        'lgs_price' => '104.2',
        ],
         [
        'building_age' => '32',
        'lgs_price' => '110',
        ],
         [
        'building_age' => '31',
        'lgs_price' => '106.2',
        ],
        [
        'building_age' => '30',
        'lgs_price' => '116.5',
        ],
        [
        'building_age' => '29',
        'lgs_price' => '123.1',
        ],
         [
        'building_age' => '28',
        'lgs_price' => '131.7',
        ],
         [
        'building_age' => '27',
        'lgs_price' => '137.6',
        ],
        [
        'building_age' => '26',
        'lgs_price' => '143.5',
        ],
        [
        'building_age' => '25',
        'lgs_price' => '150.9',
        ],
         [
        'building_age' => '24',
        'lgs_price' => '156.6',
        ],
        [
        'building_age' => '23',
        'lgs_price' => '158.3',
        ],
        [
        'building_age' => '22',
        'lgs_price' => '161',
        ],
         [
        'building_age' => '21',
        'lgs_price' => '160.5',
        ],
        [
        'building_age' => '20',
        'lgs_price' => '158.6',
        ],
         [
        'building_age' => '19',
        'lgs_price' => '159.3',
        ],
         [
        'building_age' => '18',
        'lgs_price' => '159',//減ってる
        ],
        [
        'building_age' => '17',
        'lgs_price' => '157.2',
        ],
        [
        'building_age' => '16',
        'lgs_price' => '153.6',
        ],
        [
        'building_age' => '15',
        'lgs_price' => '152.7',
        ],
        [
        'building_age' => '14',
        'lgs_price' => '152.1',
        ],
        [
        'building_age' => '13',
        'lgs_price' => '151.9',
        ],
        [
        'building_age' => '12',
        'lgs_price' => '152.9',
        ],
        [
        'building_age' => '11',
        'lgs_price' => '153.6',
        ],
        [
        'building_age' => '10',
        'lgs_price' => '156',
        ],
        [
        'building_age' => '9',
        'lgs_price' => '156.6',
        ],
        [
        'building_age' => '8',
        'lgs_price' => '156.5',//減ってる
        ],
        [
        'building_age' => '7',
        'lgs_price' => '156.8',
        ],
        [
        'building_age' => '6',
        'lgs_price' => '157.6',
        ],
        [
        'building_age' => '5',
        'lgs_price' => '159.9',
        ],
        [
        'building_age' => '4',
        'lgs_price' => '163',
        ],
        [
        'building_age' => '3',
        'lgs_price' => '165.4',
        ],
        [
        'building_age' => '2',
        'lgs_price' => '165.4',
        ],
        [
        'building_age' => '1',
        'lgs_price' => '165.4',
        ]);
    }
}
