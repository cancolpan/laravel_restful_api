<?php

namespace App;

use App\Product;
use App\Scopes\SellerScope;
use App\Transformers\UserTransformer;

class Seller extends User
{
    public $transformer = UserTransformer::class;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SellerScope);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
