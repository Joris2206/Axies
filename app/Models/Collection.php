<?php

namespace App\Models;

use App\Http\Controllers\CategoryCollectionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function  collection_categoryItem(){
        return $this->belongsToMany(CategoryCollectionItem::class);
    }
}
