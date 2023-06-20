<?php

namespace App\Models;

use App\Http\Controllers\CategoryCollectionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function  category_collectionItem(){
        return $this->belongsToMany(CategoryCollectionItem::class);
    }
}
