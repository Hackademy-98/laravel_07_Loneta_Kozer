<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Console;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','price','img','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function consoles(){
        return $this->belongsToMany(Console::class);
    }
}
