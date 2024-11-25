<?php
namespace App\Models;

class Product {
    public static function all() {
        // Simulasi data produk
        return [
            ['id' => 1, 'name' => 'Produk 1', 'price' => 100],
            ['id' => 2, 'name' => 'Produk 2', 'price' => 200],
            ['id' => 3, 'name' => 'Produk 3', 'price' => 300],
        ];
    }
}