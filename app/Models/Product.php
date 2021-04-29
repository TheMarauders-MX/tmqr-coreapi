<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'route',
        'price',
        'detail',
        'scoring',
        'area_id'
    ];

    protected $hidden = [
        'area_id',
        'created_at',
        'updated_at'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
