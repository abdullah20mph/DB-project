<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'category_id', 'brand'];

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;



   
    public function productLinks()
    {
        return $this->hasMany(Links::class, 'product_id', 'product_id');
    }

    public function productCategories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }

    




}
