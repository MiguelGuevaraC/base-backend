<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="Product",
     *     title="Product",
     *     description="Product model",
     *     @OA\Property( property="id", type="integer", example="1" ),
     *     @OA\Property( property="name", type="string", example="LAPTOP" ),
     *     @OA\Property( property="description", type="string", example="ryzen 7" ),
     *     @OA\Property( property="price_sale", type="string", example="1000" ),
     *     @OA\Property( property="status", type="string", example="Activo" )
     * )
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id ?? null,
            'name'       => $this->name ?? null,
            'description' => $this->description ?? null,


            'price_sale' => $this->price_sale ?? null,
            'status'     => $this->status ?? null,
        ];

    }
}
