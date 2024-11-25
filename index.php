<?php
require '../vendor/autoload.php';

use App\Controllers\ProductController;

// Routing sederhana
$controller = new ProductController();
$controller->index(); // Memanggil method index untuk menampilkan produk