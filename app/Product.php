<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;

class Product extends Model
{
    const AVAILABLE = 'available';
    const NOT_AVAILABLE = 'not_available';
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'seller_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
