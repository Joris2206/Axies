<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request):View{
        return view('items.main', compact('request')); 
    }

    public function Allindex():View{
        $categories = Category::query()->get();
        $collections = Collection::query()->get();
        return view('items/itemCreate', compact('categories', 'collections'));
    }
    public function store(Request $request){
        //** @var UploadedFile $itemImage */
        $itemImage = $request->file('itemImage');
        $itemPath = $itemImage->storePubliclyAs($itemImage->getClientOriginalName());

        Item::create([
            'profileSrc' => $itemPath,
            'price' => $request->input('price'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'royalties' => $request->input('royalties'),
            'size' => $request->input('size'),
            'user_id'=>$request->input('user_id'),
            'category_id'=>$request->input('category_id'),
            'collection_id'=>$request->input('collection_id')
        ]);
        return redirect('home/welcome');
    }
    public function details():View{
        $items = Item::query()->get();
        return view('items.main', compact('items')); 
    }

}
