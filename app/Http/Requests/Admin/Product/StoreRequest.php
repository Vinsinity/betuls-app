<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'brand_id' => 'required|numeric',
            'detail' => 'required',
            'categories' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|array|min:1',
            'image.*' => 'required'
        ];
    }
}
