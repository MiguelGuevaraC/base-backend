<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
 * @OA\Post(
 *     path="/base-backend/public/api/product",
 *     summary="Crear Product",
 *     tags={"Product"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(ref="#/components/schemas/ProductRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Product creada exitosamente",
 *         @OA\JsonContent(ref="#/components/schemas/Product")
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Error de validación",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Error de validación")
 *         )
 *     )
 * )
 */

   public function store(StoreProductRequest $request)
    {
        $data           = $request->validated();
        $product       = $this->productService->createProduct($data);
        return new ProductResource($product);
    }


}
