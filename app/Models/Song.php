<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'categories_id', 'author_name', 'source', 'price','status','poster_music', 'lyric'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
