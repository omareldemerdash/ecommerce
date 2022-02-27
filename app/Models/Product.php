<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_tittle',
        'meta_description',
        'meta_keywords',
    ];
    public function category(){
        return $this->belongsTo(category::class , 'cate_id' , 'id');
    }
}
