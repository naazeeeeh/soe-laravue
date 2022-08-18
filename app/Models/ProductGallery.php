<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model {
    use SoftDeletes;

    protected $fillable = [
        'products_id',
        'photo',
        'is_default',

    ];

    protected $hidden = [];

    public function product() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function photo(): Attribute {
        return Attribute::make(
            get:fn($value) => url('storage/' . $value),
        );
    }
}
