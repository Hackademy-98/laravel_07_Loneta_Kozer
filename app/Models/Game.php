<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','price','img','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
