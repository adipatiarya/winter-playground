<?php namespace Winter\Market\Components;

use Cms\Classes\ComponentBase;

class Products extends ComponentBase 
{
    public function componentDetails()
    {
        // nama detail komponent akan di tampilkan dalam menu backend
        // nama folder assets haru sama dengan nama komponent menggunakan lower case
        // karena disini menggunakan Products untuk nama komponentnya
        // maka folder assets harus bernama proucts
        // di dalam folder assets minimal harus ada filie default.htm yg nantinya akan di render ke frontend
        return [
            'name' => 'Product',
        ];
    }
    public function findAll()
    {

        // contoh sample data
        
        return [
            [
                'id' => 1,
                'name' => 'product 1',
                'slug' => 'product-1',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ],
            [
                'id' => 2,
                'name' => 'product 2',
                'slug' => 'product-2',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ],
            [
                'id' => 3,
                'name' => 'product 3',
                'slug' => 'product-3',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ],
            [
                'id' => 4,
                'name' => 'product 4',
                'slug' => 'product-4',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ],
            [
                'id' => 5,
                'name' => 'product 5',
                'slug' => 'product-5',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ],
            [
                'id' => 6,
                'name' => 'product 6',
                'slug' => 'product-6',
                'price' => 5000,
                'description' => 'deskripsi produk'
            ]
        ];
    }

}