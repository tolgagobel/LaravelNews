<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class, 'category_products');
    }


    public function up_category(){
        return $this->belongsTo('App\Models\Category', 'up_id')->withDefault([
            'category_name' => 'Ana Kategori'
        ]);

    }
}
