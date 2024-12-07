<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductInfoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:20',
            'purchase_date' => 'nullable|date',
            'documentation' => 'nullable|string',
            'warranty_status' => 'nullable|string|in:warranty,out_of_warranty,chargeable',
            'customer_detail_id' => 'required|exists:customer_details,id',
        ];
    }
}