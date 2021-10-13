<?php

namespace App\Models\Community;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasUuid;

    protected string $table = 'community_posts';

    protected array $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    protected array $hidden = [
        'id'
    ];
}
