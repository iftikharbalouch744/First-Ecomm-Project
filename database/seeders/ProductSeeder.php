<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'Name'=>'Vivo Mobile V23',
            'Price'=>'30000',
            'Category'=>'Mobile',
            'Discription'=>'Vivo mobile with 8Gb Ram and 128 GB Room',
            'Gallary'=>'gallery\Vivo-X30.jpg'
            ],
            [
                'Name'=>'IPhone 11',
                'Price'=>'130000',
                'Category'=>'Mobile',
                'Discription'=>'Iphone 11 mobile with 8Gb Ram and 128 GB Room',
                'Gallary'=>'gallery\iphone-11.jpg'
            ],
            [
                'Name'=>'LED TV ',
                'Price'=>'110000',
                'Category'=>'TV',
                'Discription'=>'LED Tv with greate vision 4k',
                'Gallary'=>'gallery\led-tv.png'
            ],
            [
                'Name'=>'LED TV ',
                'Price'=>'120000',
                'Category'=>'TV',
                'Discription'=>'LED Tv with greate vision 4k',
                'Gallary'=>'gallery\led-tv2.jpg'
            ],
            [
                'Name'=>'LED TV ',
                'Price'=>'150000',
                'Category'=>'TV',
                'Discription'=>'LED Tv with greate vision 4k',
                'Gallary'=>'gallery\led-tv3.png'
            ],
            [
                'Name'=>'Android Watch ',
                'Price'=>'10000',
                'Category'=>'Watch',
                'Discription'=>'Android watch smart with heigh resulation',
                'Gallary'=>'gallery\Android-watch1.jpg'
            ],
            [
                'Name'=>'Android Watch ',
                'Price'=>'12000',
                'Category'=>'Watch',
                'Discription'=>'Android watch smart with heigh resulation',
                'Gallary'=>'gallery\android-watch.jpg'
            ]
        ]);
    }
}
