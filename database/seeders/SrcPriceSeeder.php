<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Src;

class SrcPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('srcs')->insert([
        // 築年数
        'building_age' => '47',
        // 建築標準価格
        'src_price' => '61.2',
        ],
        [
        'building_age' => '46',
        'src_price' => '61.6',
        ],
        [
        'building_age' => '45',
        'src_price' => '77.6',
        ],
        [
        'building_age' => '44',
        'src_price' => '113',
        ],
        [
        'building_age' => '43',
        'src_price' => '126.4',
        ],
        [
        'building_age' => '42',
        'src_price' => '114.6',
        ],
         [
        'building_age' => '41',
        'src_price' => '121.8',
        ],
        [
        'building_age' => '40',
        'src_price' => '122.4',
        ],
        [
        'building_age' => '39',
        'src_price' => '128.9',
        ],
         [
        'building_age' => '38',
        'src_price' => '149.4',//なぜ上がる
        ],
        [
        'building_age' => '37',
        'src_price' => '161.8',
        ],
         [
        'building_age' => '36',
        'src_price' => '170.9',
        ],
         [
        'building_age' => '35',
        'src_price' => '168',
        ],
         [
        'building_age' => '34',
        'src_price' => '161.2',
        ],
         [
        'building_age' => '33',
        'src_price' => '172.2',
        ],
         [
        'building_age' => '32',
        'src_price' => '181.9',
        ],
         [
        'building_age' => '31',
        'src_price' => '191.8',
        ],
        [
        'building_age' => '30',
        'src_price' => '203.6',
        ],
        [
        'building_age' => '29',
        'src_price' => '237.3',
        ],
        [
        'building_age' => '28',
        'src_price' => '286.7',
        ],
         [
        'building_age' => '27',
        'src_price' => '329.8',
        ],
        [
        'building_age' => '26',
        'src_price' => '333.7',
        ],
        [
        'building_age' => '25',
        'src_price' => '300.3',
        ],
         [
        'building_age' => '24',
        'src_price' => '262.9',
        ],
        [
        'building_age' => '23',
        'src_price' => '228.8',
        ],
        [
        'building_age' => '22',
        'src_price' => '229.7',
        ],
         [
        'building_age' => '21',
        'src_price' => '223',
        ],
        [
        'building_age' => '20',
        'src_price' => '225.6',
        ],
         [
        'building_age' => '19',
        'src_price' => '220.9',
        ],
         [
        'building_age' => '18',
        'src_price' => '204.3',
        ],
        [
        'building_age' => '17',
        'src_price' => '186.1',
        ],
        [
        'building_age' => '16',
        'src_price' => '195.2',
        ],
        [
        'building_age' => '15',
        'src_price' => '187.3',
        ],
        [
        'building_age' => '14',
        'src_price' => '190.1',
        ],
        [
        'building_age' => '13',
        'src_price' => '185.7',
        ],
        [
        'building_age' => '12',
        'src_price' => '170.5',
        ],
        [
        'building_age' => '11',
        'src_price' => '182.5',
        ],
        [
        'building_age' => '10',
        'src_price' => '229.1',
        ],
        [
        'building_age' => '9',
        'src_price' => '265.2',
        ],
        [
        'building_age' => '8',
        'src_price' => '226.4',//減ってる
        ],
        [
        'building_age' => '7',
        'src_price' => '238.4',
        ],
        [
        'building_age' => '6',
        'src_price' => '223.3',
        ],
        [
        'building_age' => '5',
        'src_price' => '258.5',
        ],
        [
        'building_age' => '4',
        'src_price' => '276.2',
        ],
        [
        'building_age' => '3',
        'src_price' => '262.2',
        ],
        [
        'building_age' => '2',
        'src_price' => '262.2',
        ],
        [
        'building_age' => '1',
        'src_price' => '262.2',
        ]
);
}
    }

