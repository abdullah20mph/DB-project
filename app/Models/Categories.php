<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    public $timestamps = false;

   
    public function categoriesProducts()
    {
        // child table(foreginKEY),parent table(PK)
        return $this->hasMany(Products::class, 'category_id', 'category_id');
    }
}
