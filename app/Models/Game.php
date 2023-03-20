<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
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

    //carbon for daate 

    public function getDate()
    {

        $carbon = Carbon::create($this->updated_at)->format('d-m-Y');
        return $carbon;
    }
}
