<?php

namespace App\Models;

use App\Http\Controllers\CategoryCollectionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function  item_categoryCollection(){
        return $this->belongsToMany(CategoryCollectionItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
