<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 
        'model', 
        'serial_number', 
        'purchase_date', 
        'documentation',
        'warranty_status',
        'customer_detail_id'
    ];

    public function customerDetail()
    {
        return $this->belongsTo(CustomerDetail::class, 'customer_detail_id');
    }

    public function setBrandAttribute($value)
    {
        $this->attributes['brand'] = ucfirst(strtolower($value));
    }

    public function setModelAttribute($value)
    {
        $this->attributes['model'] = ucfirst(strtolower($value));
    }
}
