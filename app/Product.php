<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;
use App\Transaction;

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

    protected $hidden = ['pivot'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
