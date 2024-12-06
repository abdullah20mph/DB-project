<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $table = 'links';
    protected $primaryKey = 'link_id';

    public $timestamps = false;

    protected $fillable =  [ 'product_id', 'url'];
   
    public function linksOfProducts()
    {
        return $this->belongsTo(Products::class, 'product_id', 'product_id');
    }
}
