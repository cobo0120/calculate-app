<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('scs')->insert([
        // 築年数
        'building_age' => '47',
        // 建築標準価格
        'sc_price' => '30.3',
        ],
        [
        'building_age' => '46',
        'sc_price' => '32.4',
        ],
        [
        'building_age' => '45',
        'sc_price' => '42.2',
        ],
        [
        'building_age' => '44',
        'sc_price' => '55.7',
        ],
        [
        'building_age' => '43',
        'sc_price' => '60.5',
        ],
        [
        'building_age' => '42',
        'sc_price' => '62.1',
        ],
         [
        'building_age' => '41',
        'sc_price' => '65.3',
        ],
        [
        'building_age' => '40',
        'sc_price' => '70.1',
        ],
        [
        'building_age' => '39',
        'sc_price' => '75.4',
        ],
         [
        'building_age' => '38',
        'sc_price' => '84.1',
        ],
        [
        'building_age' => '37',
        'sc_price' => '91.7',
        ],
         [
        'building_age' => '36',
        'sc_price' => '93.9',
        ],
         [
        'building_age' => '35',
        'sc_price' => '94.3',
        ],
         [
        'building_age' => '34',
        'sc_price' => '95.3',
        ],
         [
        'building_age' => '33',
        'sc_price' => '96.9',
        ],
         [
        'building_age' => '32',
        'sc_price' => '102.6',//大きく増えてるので110は間違い？
        ],
         [
        'building_age' => '31',
        'sc_price' => '108.4',//減ってる
        ],
        [
        'building_age' => '30',
        'sc_price' => '117.3',
        ],
        [
        'building_age' => '29',
        'sc_price' => '128.4',
        ],
         [
        'building_age' => '28',
        'sc_price' => '147.4',
        ],
         [
        'building_age' => '27',
        'sc_price' => '158.7',
        ],
        [
        'building_age' => '26',
        'sc_price' => '162.4',
        ],
        [
        'building_age' => '25',
        'sc_price' => '159.2',
        ],
         [
        'building_age' => '24',
        'sc_price' => '148.4',
        ],
        [
        'building_age' => '23',
        'sc_price' => '143.2',
        ],
        [
        'building_age' => '22',
        'sc_price' => '143.6',
        ],
         [
        'building_age' => '21',
        'sc_price' => '141',
        ],
        [
        'building_age' => '20',
        'sc_price' => '138.7',
        ],
         [
        'building_age' => '19',
        'sc_price' => '139.4',//増えてる
        ],
         [
        'building_age' => '18',
        'sc_price' => '132',//減ってる
        ],
        [
        'building_age' => '17',
        'sc_price' => '136.4',
        ],
        [
        'building_age' => '16',
        'sc_price' => '135',
        ],
        [
        'building_age' => '15',
        'sc_price' => '131.4',
        ],
        [
        'building_age' => '14',
        'sc_price' => '130.6',
        ],
        [
        'building_age' => '13',
        'sc_price' => '132.8',
        ],
        [
        'building_age' => '12',
        'sc_price' => '133.7',
        ],
        [
        'building_age' => '11',
        'sc_price' => '135.6',
        ],
        [
        'building_age' => '10',
        'sc_price' => '158.3',
        ],
        [
        'building_age' => '9',
        'sc_price' => '156.6',
        ],
        [
        'building_age' => '8',
        'sc_price' => '163',//減ってる
        ],
        [
        'building_age' => '7',
        'sc_price' => '158.9',
        ],
        [
        'building_age' => '6',
        'sc_price' => '155.6',
        ],
        [
        'building_age' => '5',
        'sc_price' => '164.3',
        ],
        [
        'building_age' => '4',
        'sc_price' => '176.4',
        ],
        [
        'building_age' => '3',
        'sc_price' => '197.3',
        ],
        [
        'building_age' => '2',
        'sc_price' => '197.3',
        ],
        [
        'building_age' => '1',
        'sc_price' => '197.3',
        ]
);
}
    }

