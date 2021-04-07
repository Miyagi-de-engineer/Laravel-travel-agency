<?php

namespace App;

use App\Models\SecondaryCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsTo(SecondaryCategory::class);
    }
}
