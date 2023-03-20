<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'logo'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
