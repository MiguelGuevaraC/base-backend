<?php
namespace App\Http\Requests\ProductRequest;

use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends UpdateRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
