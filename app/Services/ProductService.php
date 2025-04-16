<?php
namespace App\Services;

use App\Models\Person;
use App\Models\Product;
use App\Models\User;

class ProductService
{
    public function getProductById(int $id): ?User
    {
        return Product::find($id);
    }

    public function createProduct(array $data): Product
    {
        $product = Product::create($data);
        return $product;
    }

}
