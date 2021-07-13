<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    // protected $table = 'main_categories';
    // SELECT m.name, COUNT(*) as podkategorie FROM `main_categories` as m INNER JOIN subcategories as s ON m.id = s.main_categorie_id GROUP BY s.main_categorie_id
    
    // 1:n
    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }
}
