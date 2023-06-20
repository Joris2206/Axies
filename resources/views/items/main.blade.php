@extends('layouts.main')
@push('styles')
<style>
    .route{
        background-color: #32323f;
        height: 216px;
    }
    .details{
        padding-block: 80px;
        padding-inline: 255px;
        display: flex;
        column-gap: 100px;
        color: #FFF;
    }
    .details .image{
        height: 690px;
        width: 690px;
        background-color: #7A798A;
        border-radius: 10px;
    }
    .details .info{
        width: 620px;
        height: 340px;
    }
    .buttons{
        display: flex;
        column-gap: 377px;
        margin-block-start: 16px;
        margin-block-end: 24px;
    }
    .left,.right{
        display: flex;
        column-gap: 12px;
    }
    .left div{
        width: 75px;
        height: 36px;
        background: #343444;
        border-radius: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 6px;
    }
    .right div{
        width: 36px;
        height: 36px;
        background: #343444;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .creator{
        width: 295px;
        height: 68px;
        background: #343444;
        border-radius: 16px;
        padding: 12px;
        display: flex;
        column-gap: 12px;
    }
    .creator .photo{
        width: 44px;
        height: 44px;
        background: #7A798A;
        border-radius: 15px;
    }
    .creator .division{
        display: flex;
        flex-direction: column;
        row-gap: 2px;
    }
    .creator .division p{
        font-weight: 400;
        font-size: 13px;
        line-height: 20px;
        color: #8A8AA0;
    }
    .creator .division .name{
        font-weight: 700;
        font-size: 15px;
        line-height: 22px;
        color: #EBEBEB;
    }
    .info .description{
        font-weight: 400;
        font-size: 14px;
        line-height: 22px;
        margin-block-start: 16px;
        margin-block-end: 20px;
    }
    .info .price{
        width: 295px;
        height: 50px;
        background: #343444;
        border-radius: 8px;
        font-weight: 600;
        font-size: 15px;
        line-height: 26px;
        color: #EBEBEB;
        display: flex;
        align-items: center;
        padding-inline: 24px;
    }
    .info .price .currentPrice{
        font-weight: 700;
        font-size: 18px;
        line-height: 26px;
        text-transform: capitalize;
        margin-inline-start: 83px;
        margin-inline-end: 7px;
    }
    .info .price .conversion{
        font-weight: 400;
        font-size: 13px;
        line-height: 20px;
    }
</style>
@endpush
@section('main')
<x-header color="bg-[#32323f]"></x-header>
<x-headDetail root="Explore" name="Item Detail"></x-headDetail>
<div class="details">
@php
    $itemId = request()->route('item');
    $item = \App\Models\Item::findOrFail($itemId);
@endphp
    <div class="image">
        <img class="w-full h-full" src="/storage/{{$item->profileSrc}}">
    </div>
    <div class="info">
        <h1 class="text-[36px] leading-[44px] font-bold capitalize">"{{$item->title}}"</h1>
        <div class="buttons">
            <div class="left">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99998 4.20335C6.93597 4.20335 6.07117 5.00956 6.07117 6.00055C6.07117 6.9908 6.93597 7.79627 7.99998 7.79627C9.06399 7.79627 9.9296 6.9908 9.9296 6.00055C9.9296 5.00956 9.06399 4.20335 7.99998 4.20335ZM7.99992 8.91395C6.2743 8.91395 4.87109 7.60702 4.87109 6.00056C4.87109 4.39336 6.2743 3.08569 7.99992 3.08569C9.72553 3.08569 11.1295 4.39336 11.1295 6.00056C11.1295 7.60702 9.72553 8.91395 7.99992 8.91395Z" fill="white"/>
                        <mask id="mask0_2910_1204" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.000244141H16V12.0002H0V0.000244141Z" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_2910_1204)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.2558 6.00006C2.74381 9.06172 5.25023 10.882 7.99985 10.8828C10.7495 10.882 13.2559 9.06172 14.7439 6.00006C13.2559 2.93915 10.7495 1.11884 7.99985 1.1181C5.25103 1.11884 2.74381 2.93915 1.2558 6.00006ZM8.00146 12.0003H7.99826H7.99746C4.68864 11.9981 1.71741 9.83801 0.0486004 6.22049C-0.0162001 6.07967 -0.0162001 5.92022 0.0486004 5.77939C1.71741 2.16262 4.68944 0.00255002 7.99746 0.000314692C7.99906 -0.000430418 7.99906 -0.000430418 7.99986 0.000314692C8.00146 -0.000430418 8.00146 -0.000430418 8.00226 0.000314692C11.3111 0.00255002 14.2823 2.16262 15.9511 5.77939C16.0167 5.92022 16.0167 6.07967 15.9511 6.22049C14.2831 9.83801 11.3111 11.9981 8.00226 12.0003H8.00146Z" fill="white"/>
                        </g>
                    </svg>
                    <p>225</p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                        <path d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z" fill="white"/>
                    </svg>
                    <p>100</p>
                </div>
            </div>
            <div class="right">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M15.3241 0.675199C14.7473 0.0984059 13.9309 -0.127994 13.1391 0.0705603L2.38028 2.76004C0.946096 3.11858 -0.0105779 4.35261 8.82884e-05 5.83111C0.0107545 7.3096 0.983839 8.52957 2.42295 8.86842L6.23487 9.76522L7.13166 13.5771C7.47052 15.0162 8.69054 15.9893 10.169 16C10.1772 16 10.1846 16 10.1928 16C11.6606 16 12.8832 15.0458 13.2401 13.6198L15.9296 2.86099C16.1273 2.06842 15.9009 1.25199 15.3241 0.675199ZM14.735 2.56063L12.0455 13.3195C11.7756 14.396 10.8673 14.7562 10.1772 14.7685C9.48394 14.7636 8.58387 14.3747 8.32952 13.2941L7.42372 9.44602L10.896 5.97383C11.1364 5.73343 11.1364 5.34368 10.896 5.10328C10.6556 4.86288 10.2659 4.86288 10.0255 5.10328L6.55322 8.57557L2.70519 7.66976C1.62462 7.41542 1.23572 6.51529 1.2308 5.82199C1.22588 5.12787 1.60247 4.22291 2.67975 3.95379L13.4378 1.26431C13.5256 1.24216 13.6142 1.23146 13.7012 1.23146C13.9801 1.23146 14.2493 1.34147 14.4536 1.54495C14.7219 1.81325 14.8269 2.19306 14.735 2.56063Z" fill="white"/>
                        </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="4" viewBox="0 0 16 4" fill="none">
                        <circle cx="2" cy="2" r="2" fill="white"/>
                        <circle cx="8" cy="2" r="2" fill="white"/>
                        <circle cx="14" cy="2" r="2" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="creator">
            <div class="photo">

            </div>
            <div class="division">
                <p>Created By</p>
                <p class="name">{{$item->user->name}}</p>
            </div>
        </div>
        <div class="description">
            <p>{{$item->description}}</p>
        </div>
        <div class="price">
            <p>Price</p>
            <p class="currentPrice">{{$item->price}} ETH</p>
            <p class="conversion">= ${{round(($item->price*12.246)/4.89, 2)}}</p>
        </div>
    </div>
</div>
<div class="mx-[255px]">
    <p class="mb-[40px] capitalize leading-[44px] font-bold text-[36px] text-white">More from this author</p>

    <div class="relative">
        <div class="overflow-x-scroll flex gap-x-[30px] z-">
        @foreach(\App\Models\Item::where('user_id', $item->user_id)->get() as $item)
                <a href="{{route('item.detail', ['item' => $item->id])}}">
                    <div id="{{$item->category_id}}" class="text-white bg-[#343444] w-[330px] h-[442px] flex-shrink-0 p-[20px] rounded-[20px] items">
                        <img id="output" class="w-[290px] h-[290px] mb-[21px] rounded-[20px] bg-[#7a798a] border-none" src="/storage/{{$item->profileSrc}}"/>
                        <div class="flex justify-between mb-[17px]">
                            <p id="Title" class="leading-[26px] font-bold text-lg max-w-[202px] overflow-hidden">"{{$item->title}}"</p>
                            <button class="text-white bg-[#5142fc] text-center leading-5 text-xs font-bold tracking-[0.1em] uppercase w-[49px] h-6 rounded-[10px] ">BSC</button>
                        </div>
                        <div class="mb-5 flex justify-between">
                            <div class="flex flex-col">
                                        <p class="leading-[20px] font-normal text-[13px] text-[#8A8AA0]">Creator</p>
                                        <p class="leading-[22px] font-bold text-[15px] text-[#EBEBEB]">"{{$item->user->name}}"</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="leading-[20px] font-normal text-[13px] text-[#8A8AA0]">Current Bid</p>
                                        <div class="flex gap-x-[7px]">
                                            <p id="Price" class=" leading-[26px] font-bold text-[18px] text-[#FFF] capitalize">{{$item->price}} ETH</p>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="absolute start-0 bottom-0 h-[21px] w-[1400px] z-1 bg-[#14141f]"></div>
    </div>
</div>
@endsection