<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Console extends Model
{
    use HasFactory;
    protected $fillable = ["name"];
    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
