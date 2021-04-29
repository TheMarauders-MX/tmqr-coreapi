<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'product_id',
    ];

    protected $hidden = [
        'id',
        'area_id',
        'product_id',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
