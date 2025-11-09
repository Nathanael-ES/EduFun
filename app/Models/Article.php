<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category',
        'writer_id',
        'published_at',
        'views'
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
