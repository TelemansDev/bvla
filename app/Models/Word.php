<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    // 1:1
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    } 
}
