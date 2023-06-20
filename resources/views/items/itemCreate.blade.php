@extends('layouts.main')
@push('styles')
<style>
    option[value=""][disabled] {
                display: none;
            }
            option {
                color: black;
            }
</style>
@endpush
@section('main')
<x-header color="bg-[#32323f]"></x-header>
<x-headDetail name="Create Item"></x-headDetail>

<div class="px-[255px] pt-[80px] flex gap-x-[80px] ">
    <div>
        <p class="text-white leading-[26px] font-bold text-xl mb-5">Preview item</p>

        <div class="text-white bg-[#343444] w-[330px] h-[504px] flex-shrink-0 p-[20px] rounded-[20px]">
            <img id="output" class="w-[290px] h-[290px] mb-[21px] rounded-[20px] bg-[#7a798a] border-none"/>
            <div class="flex justify-between mb-[17px]">
                <p id="Title" class="leading-[26px] font-bold text-lg max-w-[202px] overflow-hidden">Title</p>
                <button class="text-white bg-[#5142fc] text-center leading-5 text-xs font-bold tracking-[0.1em] uppercase w-[49px] h-6 rounded-[10px] ">BSC</button>
            </div>
            <div class="mb-5">
                <div class="flex justify-between">
                    <div class="flex gap-x-5 items-center">
                        <div class="h-[44px] w-[44px] rounded-[15px] bg-[#7a798a]"></div>
                        <div class="flex flex-col">
                            <p>Owned By</p>
                            <p>"{{ Auth::user()->name }}"</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p>Current Bid</p>
                        <p id="Price"></p>
                    </div>
                </div>
            </div>
            <div>
                <button>Place Bid</button>
                <button>View History</button>
            </div>
        </div>
    </div>
    <form id="myForm" class=" flex flex-col w-full" method="POST" enctype="multipart/form-data" action="{{ action([\App\Http\Controllers\ItemController::class, 'store']) }}">
                    @csrf
                    <label class="text-white leading-[26px] font-bold text-xl mb-5" for="itemImage">Upload file</label>
                    <input class="rounded-lg border" type="file" name="itemImage" placeholder="Item" accept="image/*" onchange="loadFile(event)">
                    <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="price">Price</label>
                    <input class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" type="text" name="price" placeholder="Price">
                    <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="Title">Title</label>
                    <input class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" type="text" name="title" placeholder="Title">
                    <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="description">Description</label>
                    <input class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" type="text" name="description" placeholder="Description">
                    <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="royalties">Royalties</label>
                    <input class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" type="text" name="royalties" placeholder="Royalties">
                    <div class="flex mt-6 gap-x-5">
                        <div class="flex flex-col w-full">
                            <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="size">Size</label>
                            <input class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" type="text" name="size" placeholder="Size">
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="collection_id">Collection</label>
                            <select class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" name="collection_id" id="collection_id">
                                <option value="" disabled selected>Select collections</option>
                                @foreach($collections as $collection)
                                    <option class="text-[#8A8AA0]" value="{{$collection->id}}">{{$collection->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-white leading-[26px] font-bold text-xl mb-5 mt-6" for="category_id">Collection</label>
                            <select class="rounded-lg border bg-[#14141f] border-[#343444] py-3 px-5 leading-5 text-[#8A8AA0]" name="category_id" id="category_id">
                                <option value="" disabled selected>Select category</option>
                                @foreach($categories as $category)
                                    <option class="text-[#8A8AA0]" value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"></input>
                    </div>
                    <button class="text-white">Crear</button>
                </form>
</div>
<script>
    const priceInput = document.querySelector('input[name="price"]');
    const priceElement = document.getElementById('Price');
    const titleInput = document.querySelector('input[name="title"]');
    const titleElement = document.getElementById('Title');

    priceInput.addEventListener('input', function() {
        priceElement.textContent = priceInput.value;
    });

    titleInput.addEventListener('input', function() {
        titleElement.textContent = '"' + titleInput.value + '"';
    });


    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
</script>
@endsection