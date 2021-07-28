<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MainCategory extends Model
{
    public function getRouteKeyName(): string {
        return 'slug';
    }

    // 1:n
    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }
}
