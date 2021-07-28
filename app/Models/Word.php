<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Word extends Model
{
    // 1:1
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    // scope
    public function scopeFindSubcategory(Builder $query, Subcategory $subcategory): Builder {
        return $query->where('subcategory_id', $subcategory->id);
    }

    public function scopeFindMainCategoryAndSubcategory(Builder $query, MainCategory $mainCategory, Subcategory $subcategory): Builder {
        return $query
                ->whereHas('subcategory', function(Builder $q) use ($mainCategory) {
                    $q->where('main_category_id', $mainCategory->id);
                })
                ->where('subcategory_id', $subcategory->id);
    }
}
