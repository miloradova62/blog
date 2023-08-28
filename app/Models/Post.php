<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $title
 * @property string $content
 * @property string $description
 * @property boolean $is_published
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'description',
      'is_published',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
