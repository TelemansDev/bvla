<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function getRouteKeyName() {
        return 'slug';
    }

    // 1:1
    public function mainCategory() {
        return $this->belongsTo(MainCategory::class);
    }

    // 1:n
    public function words() {
        return $this->hasMany(Word::class);
    }
}
