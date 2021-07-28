<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    public function getRouteKeyName(): string {
        return 'slug';
    }

    // 1:1
    public function mainCategory(): BelongsTo
    {
        return $this->belongsTo(MainCategory::class);
    }

    // 1:n
    public function words(): HasMany  {
        return $this->hasMany(Word::class);
    }

    // scope
    public function scopeFindMainCategory(Builder $query, MainCategory $mainCategory): Builder {
        return $query->with('words')->where('main_category_id', $mainCategory->id);
    }
}
