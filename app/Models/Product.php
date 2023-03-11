<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['id','name','qty','Category_ID'];
    // public function getCategory(){
    //     return $this->belongsTo(Category::class,'Category_ID');
    // }
}