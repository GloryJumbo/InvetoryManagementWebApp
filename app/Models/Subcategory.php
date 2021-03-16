<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'status'
    ];
    public function category()
    {       //Relation
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
