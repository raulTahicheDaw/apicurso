<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Transaction;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
