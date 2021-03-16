<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'group_id',
        'name',
        'description',
        'status'
    ];
    public function group()
    {       //Relation
        return $this->belongsTo(Groups::class, 'group_id', 'id');
    }

}
