<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = ['title', 'description', 'image', 'pusblished_year'];

    // Relations
    public function editor()
    {
        return $this->belongsTo(Editor::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
