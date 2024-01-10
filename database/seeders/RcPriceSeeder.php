<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RcPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('rcs')->insert([
        // 築年数
        'building_age' => '47',
        // 建築標準価格
        'rc_price' => '47.2',
        ],
        [
        'building_age' => '46',
        'rc_price' => '50.2',
        ],
        [
        'building_age' => '45',
        'rc_price' => '64.3',
        ],
        [
        'building_age' => '44',
        'rc_price' => '90.1',
        ],
        [
        'building_age' => '43',
        'rc_price' => '97.4',
        ],
        [
        'building_age' => '42',
        'rc_price' => '98.2',
        ],
         [
        'building_age' => '41',
        'rc_price' => '102',
        ],
        [
        'building_age' => '40',
        'rc_price' => '105.9',
        ],
        [
        'building_age' => '39',
        'rc_price' => '114.3',
        ],
         [
        'building_age' => '38',
        'rc_price' => '129.7',
        ],
        [
        'building_age' => '37',
        'rc_price' => '138.7',
        ],
         [
        'building_age' => '36',
        'rc_price' => '143',
        ],
         [
        'building_age' => '35',
        'rc_price' => '143.8',
        ],
         [
        'building_age' => '34',
        'rc_price' => '141.7',
        ],
         [
        'building_age' => '33',
        'rc_price' => '144.5',
        ],
         [
        'building_age' => '32',
        'rc_price' => '149.5',
        ],
         [
        'building_age' => '31',
        'rc_price' => '156.6',
        ],
        [
        'building_age' => '30',
        'rc_price' => '175',
        ],
        [
        'building_age' => '29',
        'rc_price' => '193.3',
        ],
         [
        'building_age' => '28',
        'rc_price' => '222.9',
        ],
         [
        'building_age' => '27',
        'rc_price' => '246.8',
        ],
        [
        'building_age' => '26',
        'rc_price' => '245.6',
        ],
        [
        'building_age' => '25',
        'rc_price' => '227.5',
        ],
         [
        'building_age' => '24',
        'rc_price' => '212.8',
        ],
        [
        'building_age' => '23',
        'rc_price' => '199',
        ],
        [
        'building_age' => '22',
        'rc_price' => '198',
        ],
         [
        'building_age' => '21',
        'rc_price' => '201',
        ],
        [
        'building_age' => '20',
        'rc_price' => '203.8',
        ],
         [
        'building_age' => '19',
        'rc_price' => '197.9',//増えてる
        ],
         [
        'building_age' => '18',
        'rc_price' => '182.6',//減ってる
        ],
        [
        'building_age' => '17',
        'rc_price' => '177.8',
        ],
        [
        'building_age' => '16',
        'rc_price' => '180.5',
        ],
        [
        'building_age' => '15',
        'rc_price' => '179.5',
        ],
        [
        'building_age' => '14',
        'rc_price' => '176.1',
        ],
        [
        'building_age' => '13',
        'rc_price' => '171.5',
        ],
        [
        'building_age' => '12',
        'rc_price' => '178.6',
        ],
        [
        'building_age' => '11',
        'rc_price' => '185.8',
        ],
        [
        'building_age' => '10',
        'rc_price' => '206.1',
        ],
        [
        'building_age' => '9',
        'rc_price' => '219',
        ],
        [
        'building_age' => '8',
        'rc_price' => '205.9',//減ってる
        ],
        [
        'building_age' => '7',
        'rc_price' => '197',
        ],
        [
        'building_age' => '6',
        'rc_price' => '193.9',
        ],
        [
        'building_age' => '5',
        'rc_price' => '203.8',
        ],
        [
        'building_age' => '4',
        'rc_price' => '228',
        ],
        [
        'building_age' => '3',
        'rc_price' => '240.2',
        ],
        [
        'building_age' => '2',
        'rc_price' => '240.2',
        ],
        [
        'building_age' => '1',
        'rc_price' => '240.2',
        ]
);
    }
}
