<?php

namespace Modules\Category\Entities;

use Illuminate\Support\Facades\App;
use Modules\Product\Entities\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name'];

    public function products(){
    return $this->hasMany(Product::class)->orderBy('id','DESC');
    }

    
    protected static function newFactory()
    {
        return \Modules\Category\Database\factories\CategoryFactory::new();
    }
}
