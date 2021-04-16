<?php

namespace App;

use App\Models\SecondaryCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{

    protected $fillable = [
        'title',
        'secondary_category_id',
        'take_time',
        'capacity',
        'description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes');
    }

    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->likes->where('id', $user->id)->count()
            : false;
    }

    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
