<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\PublishedScope;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'is_draft',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new PublishedScope);
    }
}
