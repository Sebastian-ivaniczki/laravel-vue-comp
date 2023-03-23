<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Game extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = ['title', 'description', 'image', 'published_year', 'vote', 'sell_price', 'banner_image', 'video_trailer', 'editor_id'];

    protected $with = ['genres'];

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

    // get abstract for description
    public function getAbstract()
    {
        $abstract = substr($this->description, 0, 25) . '...';

        return $abstract;
    }
}
