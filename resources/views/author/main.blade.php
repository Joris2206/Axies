@extends('layouts.main')
@push('styles')
<style>
    .hidden_item {
  display: none;
}

</style>
@endpush
@section('main')
<x-header color="bg-[#32323f]"></x-header>
<x-headDetail root="Pages" name="Author"></x-headDetail>
@php
    $userId = request()->route('user');
    $user = \App\Models\User::findOrFail($userId);
@endphp
<div class="pl-[255px] pt-[80px] w-[1920px] mb-[60px]">
    <div class="h-[280px] w-[1410px] pt-[40px] pl-[40px] bg-[#313037] rounded-ss-[12px] rounded-se-[12px] flex justify-between">
        <div class="flex gap-x-10">
            <div class="h-[274px] w-[274px] rounded-[20px] bg-[#7a798a]"></div>
            <div class="flex flex-col mt-5">
                <p class="text-[#EBEBEB] text-center leading-7 text-lg">Author Profile</p>
                <p class="text-white leading-[44px] font-bold text-4xl capitalize">{{$user->name}}</p>
            </div>
        </div>
        <div class="flex mr-[40px] gap-x-[32px] mt-5">
            <div class="flex gap-x-[12px]">
                <div class="h-[40px] w-[40px] bg-[#ebebeb] rounded-lg"></div>
                <div class="h-[40px] w-[40px] bg-[#ebebeb] rounded-lg"></div>
                <div class="h-[40px] w-[40px] bg-[#ebebeb] rounded-lg"></div>
                <div class="h-[40px] w-[40px] bg-[#ebebeb] rounded-lg"></div>
            </div>
            <button class="h-[40px] w-[97px] rounded-[30px] border border-white bg-transparent capitalize font-bold leading-[22px] text-white">Follow</button>
        </div>
    </div>
    <div class="h-[74px] bg-[#343444] w-[1410px] overflow-x-scroll pl-[400px] mb-[60px] pr-[135px]">
        <div class="flex">
        <button id="category-0" data-category="0" class="text-white mr-[135px]">All</button>
            @foreach($categories as $category)
                <button id="category-{{$category->id}}" data-category="{{$category->id}}" class="text-white mr-[135px]">{{$category->name}}</button>
            @endforeach
        </div>
    </div>
    <div class="flex gap-x-[30px] gap-y-[40px] flex-wrap">
        @foreach(\App\Models\Item::where('user_id', $userId)->get() as $item)
            <a href="{{route('item.detail', ['item' => $item->id])}}">
                <div id="{{$item->category_id}}" class="text-white bg-[#343444] w-[330px] h-[511px] flex-shrink-0 p-[20px] rounded-[20px] items">
                    <img id="output" class="w-[290px] h-[290px] mb-[21px] rounded-[20px] bg-[#7a798a] border-none" src="/storage/{{$item->profileSrc}}"/>
                    <div class="flex justify-between mb-[17px]">
                        <p id="Title" class="leading-[26px] font-bold text-lg max-w-[202px] overflow-hidden">"{{$item->title}}"</p>
                    </div>
                    <div class="mb-5">
                        <div class="flex justify-between">
                            <div class="flex gap-x-5 items-center">
                                <div class="h-[44px] w-[44px] rounded-[15px] bg-[#7a798a]"></div>
                                <div class="flex flex-col">
                                    <p class="leading-[20px] font-normal text-[13px] text-[#8A8AA0]">Creator</p>
                                    <p class="leading-[22px] font-bold text-[15px] text-[#EBEBEB]">"{{$item->user->name}}"</p>
                                </div>
                            </div>
                        <button class="text-white bg-[#5142fc] text-center leading-5 text-xs font-bold tracking-[0.1em] uppercase w-[49px] h-6 rounded-[10px] ">BSC</button>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col">
                            <p class="leading-[20px] font-normal text-[13px] text-[#8A8AA0]">Current Bid</p>
                            <div class="flex gap-x-[7px]">
                                <p id="Price" class=" leading-[26px] font-bold text-[18px] text-[#FFF] capitalize">{{$item->price}} ETH</p>
                                <p class=" leading-[20px] font-normal text-[13px] text-[#8A8AA0]">= ${{round(($item->price*12.246)/4.89, 2)}}</p>
                            </div>
                        </div>
                        <button class=" leading-[26px] font-bold text-[16px] text-[#8A8AA0] flex items-center gap-x-[9px] ml-[35px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path d="M16.7803 9.99284C16.5493 9.88916 16.2866 9.88147 16.05 9.97146C15.8134 10.0614 15.6222 10.2417 15.5185 10.4727C15.0503 11.5167 14.2956 12.4065 13.3419 13.0387C12.3882 13.6709 11.2747 14.0195 10.1308 14.0442C8.98687 14.0689 7.85941 13.7686 6.87935 13.1781C5.89929 12.5876 5.10685 11.7312 4.59405 10.7083L5.13468 10.949C5.36596 11.052 5.62867 11.0589 5.86503 10.9682C6.10138 10.8774 6.29202 10.6965 6.39499 10.4653C6.49796 10.234 6.50484 9.97126 6.41411 9.73491C6.32339 9.49856 6.14248 9.30792 5.9112 9.20495L3.39889 8.08644C3.28438 8.03545 3.16093 8.00752 3.03562 8.00423C2.91031 8.00095 2.78557 8.02239 2.66854 8.06731C2.55151 8.11223 2.44447 8.17977 2.35354 8.26606C2.26261 8.35235 2.18957 8.45571 2.13858 8.57023L1.02003 11.0824C0.917054 11.3137 0.910175 11.5764 1.0009 11.8128C1.09163 12.0492 1.27253 12.2398 1.50382 12.3428C1.7351 12.4457 1.99781 12.4526 2.23417 12.3619C2.47052 12.2712 2.66116 12.0903 2.76413 11.859L2.89171 11.5724C3.55406 12.8898 4.56946 13.9972 5.8246 14.7711C7.07975 15.5449 8.52524 15.9547 9.99975 15.9548C10.0459 15.9548 10.0923 15.9544 10.1385 15.9536C11.6492 15.9275 13.1213 15.4717 14.3825 14.6395C15.6437 13.8074 16.6418 12.6333 17.2601 11.2547C17.3638 11.0237 17.3715 10.761 17.2815 10.5244C17.1915 10.2877 17.0112 10.0965 16.7803 9.99284Z" fill="white"/>
                            <path d="M18.4955 3.65724C18.2642 3.55428 18.0015 3.5474 17.7652 3.63813C17.5288 3.72886 17.3382 3.90976 17.2352 4.14103L17.1076 4.42756C16.4345 3.08867 15.397 1.9671 14.1144 1.19197C12.8319 0.416837 11.3566 0.0196605 9.85824 0.046167C8.35991 0.0726735 6.89953 0.521785 5.64522 1.3418C4.39092 2.16181 3.3937 3.31937 2.76836 4.68123C2.71584 4.79515 2.68629 4.9183 2.68139 5.04365C2.6765 5.169 2.69635 5.29408 2.73983 5.41175C2.78331 5.52941 2.84955 5.63736 2.93478 5.72941C3.02 5.82146 3.12253 5.89581 3.2365 5.94821C3.35048 6.0006 3.47366 6.03002 3.59902 6.03478C3.72437 6.03954 3.84943 6.01955 3.96705 5.97594C4.08467 5.93234 4.19255 5.86598 4.2845 5.78065C4.37646 5.69533 4.4507 5.59272 4.50297 5.47869C4.97849 4.44299 5.73697 3.56272 6.69101 2.93934C7.64506 2.31596 8.75582 1.97484 9.8953 1.9553C11.0348 1.93575 12.1566 2.23857 13.1315 2.82886C14.1063 3.41914 14.8946 4.27287 15.4053 5.29166L14.8647 5.05095C14.6337 4.94955 14.3719 4.94373 14.1366 5.03477C13.9013 5.12581 13.7116 5.30631 13.6089 5.5368C13.5063 5.7673 13.4991 6.02905 13.5889 6.26483C13.6787 6.50062 13.8582 6.69126 14.0882 6.7951L16.5932 7.91025L16.5977 7.91228C16.7123 7.96372 16.8359 7.99203 16.9614 7.99561C17.087 7.99919 17.212 7.97796 17.3293 7.93314C17.4466 7.88831 17.5539 7.82078 17.6451 7.7344C17.7363 7.64803 17.8095 7.54451 17.8606 7.42978L18.9791 4.91756C19.0821 4.68629 19.089 4.42359 18.9983 4.18724C18.9076 3.95089 18.7268 3.76024 18.4955 3.65724Z" fill="white"/>
                            </svg>
                            View History</button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var items = $('.items');

$(document).ready(function() {
  // Manejar el clic en los botones de categoría
  $('[id^="category-"]').on('click', function() {
    // Obtener la categoría seleccionada
    var category = $(this).data('category');
    console.log(category);
    
    // Ocultar o mostrar los elementos según la categoría seleccionada
    items.each(function() {
      var itemId = $(this).attr('id');
      if(category == 0){
        $(this).removeClass('hidden_item');
      }
      else{
        if (itemId == category) {
        $(this).removeClass('hidden_item'); // Mostrar el elemento si pertenece a la categoría seleccionada
      } else {
        $(this).addClass('hidden_item'); // Ocultar el elemento si no pertenece a la categoría seleccionada
      }
      }
    });
  });
});
</script>
@endsection