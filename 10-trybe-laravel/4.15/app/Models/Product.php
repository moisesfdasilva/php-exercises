<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'category_id', 'price'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'products_tags')
                ->withTimestamps();
    }
}
