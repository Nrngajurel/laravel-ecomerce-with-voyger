<?php

use App\Product;
use Illuminate\Database\Seeder;

class proTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(

            [
                'name'  =>'product1',
                'slug'  =>'product1',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/C1aEgMuvcb32hLx3c9t7GKd.jpg',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product2',
                'slug'  =>'product2',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/nvbnbv.jpg',

                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product3',
                'slug'  =>'product3',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/C1aEgMu32hvnLx3c9t7GKd.jpg',

                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        )->catagories()->attach(2);
        Product::create(

            [
                'name'  =>'product4',
                'slug'  =>'product4',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/C1aEgMvbnu32hLx3c9t7GKd.jpg',

                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        )->catagories()->attach(2);
        Product::create(

            [
                'name'  =>'product5',
                'slug'  =>'product5',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/C1aEgvbnMu32hLx3c9t7GKd.jpg',

                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product6',
                'slug'  =>'product6',
                'short_description'  =>'orem ipsum dolor sit amet, vbnvb adipisicing elit',
                'price'  =>'1000',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        )->catagories()->attach(3);
        Product::create(

            [
                'name'  =>'product7',
                'slug'  =>'product7',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product8',
                'slug'  =>'product8',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        )->catagories()->attach(3);
        Product::create(

            [
                'name'  =>'product9',
                'slug'  =>'product9',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product10',
                'slug'  =>'product10',
                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'image'=>'products/October2019/C1aEgMu32hLx3c9t7GKd.jpg',

                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        );
        Product::create(

            [
                'name'  =>'product11',
                'slug'  =>'product11',
                'image'=>'products/October2019/BjTImn5TXAwKlwaxtAIB.jpg',

                'short_description'  =>'orem ipsum dolor sit amet, consectetur adipisicing elit',
                'price'  =>'1000',
                'description'  =>'product1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

            ]
        )->catagories()->attach(2);
    }
}
