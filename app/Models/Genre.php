<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'color'];

    // Relations
    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
