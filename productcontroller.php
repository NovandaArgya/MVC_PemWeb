<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public function index() {
        $products = Product::all(); // Mengambil semua produk
        include '../app/views/products/index.php'; // Menampilkan view
    }
}