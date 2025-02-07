<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $primaryKey = 'recipeId';
    protected $fillable = ['dishId', 'ingredient'];
    public $timestamps = true; 

    public function dish(){
        return $this->belongsTo(Dish::class);
    }
}
