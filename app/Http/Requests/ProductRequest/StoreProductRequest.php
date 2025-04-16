<?php
namespace App\Http\Requests\ProductRequest;

use App\Http\Requests\StoreRequest;

/**
 * @OA\Schema(
 *     schema="ProductRequest",
 *     title="ProductRequest",
 *     description="Request model for Product information with filters and sorting",
 *     required={"description", "name", "price_sale"},
 *
 *     @OA\Property(property="description", type="string", description="Descripción del producto"),
 *     @OA\Property(property="name", type="string", description="Nombre del producto"),
 *     @OA\Property(property="price_sale", type="number", format="float", description="Precio de venta del producto"),
 *     @OA\Property(property="status", type="string", enum={"Activo", "Inactivo"}, description="Estado del producto")
 * )
 */
class StoreProductRequest extends StoreRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|string',
            'name'        => 'required|string',
            'price_sale'  => 'required|numeric|min:0',
            'status'      => 'nullable|in:Activo,Inactivo',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'La descripción es obligatoria.',
            'description.string'   => 'La descripción debe ser un texto válido.',

            'name.required' => 'El nombre del producto es obligatorio.',
            'name.string'   => 'El nombre del producto debe ser un texto válido.',

            'price_sale.required' => 'El precio de venta es obligatorio.',
            'price_sale.numeric'  => 'El precio de venta debe ser un número.',
            'price_sale.min'      => 'El precio de venta no puede ser negativo.',

            'status.in'           => 'El estado debe ser Activo o Inactivo.',
        ];
    }
}
