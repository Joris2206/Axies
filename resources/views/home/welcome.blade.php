@extends('layouts.main')
@push('styles')
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .content{
            background-color: #14141f;
            width: 1920px;
        }
        .header{
            color: #FFF;
            position: relative;
            height: 674px;
        }
        .headerInfo{
            padding-block-start: 115px;
            margin-inline-start: 255px;
            color: #FFF;
        }
        .headerInfo h1{
            font-weight: 700;
            font-size: 56px;
            line-height: 68px;
            z-index: 2;
        }
        .headerInfo p{
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;
            color: #EBEBEB;
            margin-block-start: 29px;
            z-index: 2;
        }
        .headerButtons{
            height: 56px;
            display: flex;
            column-gap: 16px;
            margin-block-start: 36px;
            margin-block-end: 147px;
            font-weight: 700;
            font-size: 15px;
            line-height: 22px;
        }
        .headerButtons .exploreBtn{
            width: 154px;
            background-color: #14141f;
            border: 1px solid #5142FC;
            border-radius: 30px;
            color: #FFF;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 6px;
        }
        .headerButtons .create{
            width: 147px;
            background-color: #FFF;
            border: 1.5px solid #FFF;
            border-radius: 30px;
            color:black;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 8px;
        }
        .shape{
            position: absolute;
        }
        .mainShape{
            top: 84px;
            right: 234px;
            z-index: 1;
        }
        .shape1,.shape2,.shape3,.shape4{
            background: linear-gradient(216.56deg, #E250E5 5.32%, #4B50E6 94.32%);
        }
        .shape1{
            height: 22px;
            width: 22px;
            left: 683px;
            top: 450px;
            border-radius: 50%;
        }
        .shape2{
            height: 44px;
            width: 44px;
            left: 1030px;
            top: 150px;
            border-radius: 50%;
            z-index: 2;
        }
        .shape3{
            height: 16px;
            width: 16px;
            left: 1195px;
            top: 136px;
            border-radius: 50%;
        }
        .shape4{
            height: 32px;
            width: 32px;
            left: 1564px;
            top: 512px;
            border-radius: 50%;
            z-index: 2;
        }
        .shape5{
            height: 51px;
            width: 51px;
            border-radius: 50%;
            background: #6A1AB7;
            right: 322px;
            top: 45px;
        }
        .shape6{
            height: 51px;
            width: 51px;
            border-radius: 50%;
            background: #6A1AB7;
            right: 1070px;
            top: 260px;
        }
        .shape7{
            width: 178px;
            height: 110px;
            right: 0;
            top: -100px;
            background: linear-gradient(137.64deg, rgba(43, 24, 103, 0.7) 26.68%, rgba(63, 41, 141, 0.7) 55.42%, rgba(69, 61, 154, 0.7) 72.8%, rgba(93, 106, 167, 0.7) 85.68%);
            filter: blur(75px);
            transform: matrix(-1, 0, 0, 1, 0, 0);
        }
        .shape8{
            width: 530px;
            height: 327px;
            left: -10px;
            top: 0px;
            background: radial-gradient(30.8% 30.8% at 57.79% 54.71%, rgba(43, 24, 103, 0.24) 0%, rgba(56, 35, 131, 0.24) 48.71%, rgba(69, 40, 150, 0.24) 78.16%, rgba(118, 36, 142, 0.24) 100%) /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */;
            filter: blur(75px);
            z-index: 1;
        }
        .shape9{
            width: 316px;
            height: 195px;
            right: 140px;
            top: 400px;
            background: linear-gradient(137.64deg, rgba(43, 24, 103, 0.3) 26.68%, rgba(56, 35, 131, 0.3) 55.42%, rgba(69, 40, 150, 0.3) 72.8%, rgba(118, 36, 142, 0.3) 85.68%);
            filter: blur(75px);
            transform: rotate(180deg);
        }
        .details{
            color: #FFF;
            display: flex;
            column-gap: 39px;
            padding-inline: 260px;
            padding-block-start: 28px;
            margin-block-end: 80px;
        }
        .details h3{
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
            margin-block-start: 24px;
            margin-block-end: 10px;
        }
        .details p{
            font-weight: 400;
            font-size: 14px;
            line-height: 22px;
            text-align: center;
        }
        .details div{
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 321px;
            height: 186px;
        }
        .info{
            margin-block-start: 80px;
            padding-inline: 255px;
        }
        .liveAuctions{
            height: 771px;
            background-color: #0d0d11;
            padding-block-start: 60px;
        }
        .liveAuctions .titles{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-block-end: 36px;
            margin-inline: 255px;
        }
        .titles p{
            font-weight: 700;
            font-size: 36px;
            line-height: 44px;
            color: #FFF;
        }
        .liveAuctions .titles button{
            font-weight: 700;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.1em;
            background-color: #14141f;
            color: #FFF;
            border: none;
            width: 118px;
            height: 25px;
        }
        .liveContent{
            display: flex;
            column-gap: 30px;
        }
        .liveContent .box{
            width: 330px;
            height: 511px;
            background: #343444;
            border-radius: 20px;
            padding: 20px;
            position: relative;
        }
        .liveContent .box .innerSquare{
            width: 290px;
            height: 290px;
            background: #7A798A;
            border-radius: 20px;
            position: relative;
        }
        .liveContent .box .innerSquare .likes{
            width: 64px;
            height: 28px;
            background: #14141F;
            border-radius: 10px;
            position: absolute;
            inset-block-start: 15px;
            inset-inline-end: 13px;
            display: flex;
            color: #FFF;
            align-items: center;
            justify-content: center;
            column-gap: 5px;
        }
        .popularCollection{
            margin-block-end: 80px;
        }
        .popularCollection .titles{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-block-end: 38px;
        }
        .popularCollection .titles button{
            font-weight: 700;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            background-color: #14141f;
            color: #FFF;
            border: none;
            width: 119px;
            height: 25px;
        }
        .popularCollection .boxes{
            display: flex;
            column-gap: 30px;
        }
        .popularCollection .boxes .box{
            height: 394px;
            width: 450px;
            background-color: #343444;
            border-radius: 10px;
        }
        .topSellers{
            height: 312px;
            margin-block-end: 80px;
        }
        .topSellers .titles{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-block-end: 40px;
        }
        .sellersList{
            height: 228px;
            display: flex;
            column-gap: 56px;
            row-gap: 28px;
            flex-wrap: wrap;
        }
        .sellersList .list{
            display: flex;
            align-items: center;
            column-gap: 16px;
            height: 100px;
            width: 233px;
        }
        .sellersList .list .image{
            width: 100px;
            height: 100px;
            background: #7A798A;
            border-radius: 34px;
            position: relative;
        }
        .sellersList .list .image svg{
            position: absolute;
            inset-block-end: 0;
            inset-inline-end: 0;
        }
        .sellersList .list h3{
            font-weight: 700;
            font-size: 16px;
            line-height: 26px;
            color: #FFF;
        }
        .sellersList .list p{
            font-weight: 700;
            font-size: 15px;
            line-height: 22px;
            color: #ebebeb;
        }
        .sellersList .list .listInfo{
            display: flex;
            flex-direction: column;
            row-gap: 2px;
            align-items: flex-start;
        }
        .today{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .today .titles{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-block-end: 36px;
            width: 100%;
        }
        .today .titles button{
            font-weight: 700;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            background-color: #14141f;
            color: #FFF;
            border: none;
            width: 119px;
            height: 25px;
        }
        .today .boxes{
            display: flex;
            row-gap: 44px;
            column-gap: 30px;
            flex-wrap: wrap;
        }
        .today .boxes .box{
            width: 330px;
            height: 511px;
            background: #343444;
            border-radius: 20px;
            padding: 20px;
        }
        .today .boxes .box .innerSquare{
            background-color: #7a798a;
            border-radius: 20px;
            height: 290px;
            width: 290px;
            position: relative;
        }
        .today .boxes .box .innerSquare .likes{
            width: 64px;
            height: 28px;
            background: #14141F;
            border-radius: 10px;
            position: absolute;
            inset-block-start: 15px;
            inset-inline-end: 13px;
            display: flex;
            color: #FFF;
            align-items: center;
            justify-content: center;
            column-gap: 5px;
        }
        .today .load{
            margin-block-start: 37px;
            margin-block-end: 80px;
            width: 154px;
            height: 54px;
            border: 1px solid #FFF;
            border-radius: 30px;
            font-weight: 700;
            font-size: 15px;
            line-height: 22px;
            color: #FFF;
        }
    </style>
@endpush
@section('main')
<x-header></x-header>
<div class="content">
    <div class="header">
        
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div></div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
            <div class="headerInfo">
                <h1>Discover, and collect</h1>
                <h1>extraordinary</h1>
                <h1><span>Monster</span>NFTs</h1>
                <p>Marketplace For Monster Character Collections Non Fungible Token NFTs</p>
                <div class="headerButtons">
                    <button class="exploreBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <g clip-path="url(#clip0_646_2265)">
                            <path d="M15.5016 18.208L16.7718 16.0081C19.6055 11.1 19.2409 6.9367 18.9643 5.41037C18.935 5.24484 18.834 5.10181 18.6898 5.01703C18.5446 4.93249 18.3706 4.91599 18.2116 4.97132C16.7382 5.48435 12.908 7.22726 10.0717 12.1398L8.8013 14.3403L8.23698 14.3794C7.14884 14.4556 6.16894 15.0678 5.62318 16.013L4.10722 18.6388C4.01744 18.7943 4.02025 18.9876 4.11456 19.1409C4.20976 19.294 4.38123 19.3818 4.56074 19.3695L6.38803 19.2526C6.90091 19.2202 7.41191 19.3391 7.85724 19.5962L8.82761 20.1565L8.09296 21.4289C7.95781 21.663 8.0379 21.9619 8.27143 22.0968L9.04839 22.5453C9.28193 22.6802 9.58084 22.6001 9.71599 22.366L10.4506 21.0935L11.4204 21.6534C11.8658 21.9106 12.2255 22.2929 12.4535 22.7552L13.265 24.395C13.3441 24.5566 13.506 24.6611 13.6861 24.667C13.866 24.6721 14.0349 24.5778 14.1246 24.4223L15.6406 21.7966C16.1857 20.8524 16.2253 19.6974 15.7485 18.7161L15.5016 18.208ZM14.1419 12.8273C13.3359 12.362 13.059 11.3304 13.5244 10.5245C13.99 9.71798 15.0215 9.44254 15.8274 9.90785C16.6328 10.3728 16.91 11.4039 16.4444 12.2103C15.9791 13.0163 14.9473 13.2923 14.1419 12.8273Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_646_2265">
                            <rect width="20" height="20" fill="white" transform="translate(10) rotate(30)"/>
                            </clipPath>
                            </defs>
                        </svg> 
                        Explore
                    </button>
                    <button class="create">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_84_187)">
                            <path d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z" fill="#5142FC"/>
                            <path d="M3.13295 0.00947145C2.97955 -0.0183801 2.82127 0.0159949 2.69326 0.105057C2.56529 0.194159 2.47807 0.330604 2.451 0.484198L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947145Z" fill="#5142FC"/>
                            <path d="M19.9912 16.8704L17.5493 3.02157C17.4931 2.7029 17.1893 2.49024 16.8705 2.5463L3.02166 4.98821C2.70299 5.04438 2.49017 5.34829 2.54635 5.66696L4.98826 19.5158C5.01525 19.6689 5.10193 19.8049 5.22923 19.8941C5.32841 19.9635 5.44587 20 5.56533 20C5.59919 20 5.63326 19.9971 5.66704 19.9911L19.5159 17.5492C19.6689 17.5223 19.805 17.4356 19.8941 17.3083C19.9833 17.181 20.0182 17.0235 19.9912 16.8704ZM5.66845 9.8763C5.61228 9.55763 5.82509 9.25372 6.14376 9.19755L15.3764 7.56958C15.6953 7.51341 15.999 7.72618 16.0552 8.04485C16.1113 8.36352 15.8985 8.66743 15.5798 8.7236L6.34724 10.3516C6.31282 10.3577 6.27857 10.3606 6.24482 10.3606C5.96579 10.3606 5.71857 10.1606 5.66845 9.8763ZM13.3163 13.8826L7.16122 14.9679C7.12681 14.974 7.09255 14.9769 7.0588 14.9769C6.77978 14.9769 6.53255 14.7769 6.48243 14.4926C6.42626 14.1739 6.63907 13.87 6.95775 13.8138L13.1128 12.7285C13.4317 12.6723 13.7354 12.8851 13.7916 13.2038C13.8477 13.5225 13.6349 13.8264 13.3163 13.8826ZM15.9868 11.0318L6.75419 12.6597C6.71978 12.6658 6.68552 12.6687 6.65177 12.6687C6.37275 12.6687 6.12552 12.4687 6.0754 12.1844C6.01923 11.8658 6.23204 11.5618 6.55071 11.5057L15.7833 9.8777C16.1022 9.82153 16.4059 10.0343 16.4621 10.353C16.5183 10.6717 16.3055 10.9756 15.9868 11.0318Z" fill="#5142FC"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_84_187">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>    
                        Create
                    </button>
                </div>
            </div>
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
            <div class="shape shape6"></div>
            <div class="shape shape7"></div>
            <div class="shape shape8"></div>
            <div class="shape shape9"></div>
            <div class="shape mainShape">
            <svg xmlns="http://www.w3.org/2000/svg" width="729" height="475" viewBox="0 0 729 475" fill="none">
                <path d="M279.489 469.452C275.151 467.976 270.933 466.174 266.877 464.065C229.642 444.712 216.453 407.482 202.486 368.067C192.668 340.369 182.518 311.723 163.255 289.732C144.758 268.616 118.679 254.727 93.4631 241.268C79.7235 233.953 65.5187 226.386 52.5544 217.697C13.4113 191.458 -14.1006 142.78 9.70379 109.906C27.9817 84.6669 66.4901 82.6948 87.8137 83.7644C96.3232 84.1906 105.003 85.0501 113.402 85.8826C133.561 87.879 154.406 89.9462 174.02 86.0747C202.044 80.5308 224.84 63.534 246.876 47.0979C259.405 37.7039 272.377 28.0765 286.301 20.4538C327.798 -2.2607 383.462 -5.32195 435.217 12.2678C478.686 27.0416 514.169 54.1612 535.137 88.6346C544.277 103.687 551.256 120.265 558.003 136.313C570.803 166.747 582.887 195.496 608.666 215.708C622.353 226.444 638.93 233.597 654.951 240.518C662.789 243.907 670.899 247.406 678.621 251.302C695.925 260.024 725.401 278.942 728.491 307.646C732.276 342.849 691.232 368.517 650.512 370.403C633.82 371.172 616.73 369.484 600.205 367.81C578.692 365.678 556.438 363.473 535.203 366.785C495.956 372.934 464.343 396.892 433.762 420.066C425.726 426.158 417.423 432.431 409.114 438.31C387.469 453.625 331.595 487.162 279.489 469.452ZM434.364 14.6401C383.371 -2.69084 328.541 0.304288 287.709 22.656C273.944 30.1961 261.049 39.8157 248.582 49.1112C226.32 65.7179 203.304 82.8958 174.664 88.5463C154.65 92.4953 133.595 90.4162 113.22 88.3974C104.856 87.5686 96.2128 86.7129 87.7922 86.2999C67.0092 85.2604 29.5315 87.1391 11.9439 111.418C-10.9464 143.059 15.9777 190.197 53.9888 215.701C66.8244 224.33 80.9726 231.843 94.6504 239.12C120.104 252.677 146.429 266.692 165.27 288.198C184.874 310.587 195.112 339.468 205.008 367.405C218.795 406.306 231.806 443.067 268.055 461.889C271.988 463.934 276.078 465.681 280.284 467.112C331.143 484.397 386.098 451.367 407.368 436.36C415.631 430.534 423.931 424.242 431.954 418.163C462.785 394.801 494.665 370.636 534.579 364.389C556.145 361.01 578.58 363.233 600.282 365.387C616.711 367.012 633.699 368.699 650.184 367.936C689.612 366.114 729.387 341.518 725.757 307.809C722.693 279.301 690.907 260.366 677.391 253.546C669.748 249.694 661.68 246.21 653.881 242.842C637.681 235.843 620.937 228.608 606.945 217.641C580.592 196.977 567.809 166.574 555.447 137.159C548.727 121.223 541.797 104.695 532.755 89.8214C512.139 55.8773 477.186 29.2026 434.361 14.6478L434.364 14.6401Z" fill="#6A1AB7"/>
            </svg>
            </div>
        </div>
        <div class="details">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect width="56" height="56" rx="16" fill="#5142FC"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.9227 26.0178H39.104C39.5988 26.0178 40 26.3981 40 26.8671V29.8195C39.9942 30.2862 39.5964 30.6633 39.104 30.6688H35.0187C33.8257 30.684 32.7826 29.9098 32.512 28.8084C32.3765 28.1247 32.5667 27.4192 33.0317 26.8809C33.4966 26.3427 34.1888 26.0268 34.9227 26.0178ZM35.1039 29.1219H35.4986C36.0052 29.1219 36.4159 28.7326 36.4159 28.2524C36.4159 27.7722 36.0052 27.3829 35.4986 27.3829H35.1039C34.8616 27.3802 34.6282 27.4695 34.4559 27.631C34.2835 27.7924 34.1866 28.0126 34.1866 28.2423C34.1865 28.7242 34.5956 29.1164 35.1039 29.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                    <path d="M34.9227 24.2788H40C40 20.3154 37.5573 18 33.4187 18H22.5813C18.4427 18 16 20.3154 16 24.2282V32.7718C16 36.6846 18.4427 39 22.5813 39H33.4187C37.5573 39 40 36.6846 40 32.7718V32.4078H34.9227C32.5662 32.4078 30.656 30.5971 30.656 28.3635C30.656 26.1299 32.5662 24.3192 34.9227 24.3192V24.2788Z" fill="white"/>
                    <path d="M28.4587 24.2788H21.6854C21.177 24.2733 20.768 23.8811 20.7681 23.3992C20.7739 22.9229 21.1829 22.5398 21.6854 22.5398H28.4587C28.9654 22.5398 29.3761 22.9291 29.3761 23.4093C29.3761 23.8895 28.9654 24.2788 28.4587 24.2788Z" fill="#948BFB"/>
                </svg>
                <h3>Set Up Your Wallet</h3>
                <p>Once you&#39ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect width="56" height="56" rx="16" fill="#47A432"/>
                    <path d="M23.104 16H19.048C17.368 16 16 17.38 16 19.0732V23.164C16 24.868 17.368 26.2359 19.048 26.2359H23.104C24.796 26.2359 26.1519 24.868 26.1519 23.164V19.0732C26.1519 17.38 24.796 16 23.104 16Z" fill="white"/>
                    <path d="M23.104 29.7637H19.048C17.368 29.7637 16 31.1329 16 32.8369V36.9276C16 38.6196 17.368 39.9996 19.048 39.9996H23.104C24.796 39.9996 26.1519 38.6196 26.1519 36.9276V32.8369C26.1519 31.1329 24.796 29.7637 23.104 29.7637Z" fill="white"/>
                    <path d="M36.9521 16H32.8961C31.2041 16 29.8481 17.38 29.8481 19.0732V23.164C29.8481 24.868 31.2041 26.2359 32.8961 26.2359H36.9521C38.6321 26.2359 40.0001 24.868 40.0001 23.164V19.0732C40.0001 17.38 38.6321 16 36.9521 16Z" fill="white" fill-opacity="0.4"/>
                    <path d="M36.9521 29.7637H32.8961C31.2041 29.7637 29.8481 31.1329 29.8481 32.8369V36.9276C29.8481 38.6196 31.2041 39.9996 32.8961 39.9996H36.9521C38.6321 39.9996 40.0001 38.6196 40.0001 36.9276V32.8369C40.0001 31.1329 38.6321 29.7637 36.9521 29.7637Z" fill="white"/>
                </svg>
                <h3>Create Your Collection</h3>
                <p>Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect width="56" height="56" rx="16" fill="#9835FB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3955 23.8885C19.3955 21.1625 21.0605 19.3955 23.6375 19.3955H32.3535C34.9395 19.3955 36.6045 21.1625 36.6045 23.8885V29.1905C36.1585 28.8125 34.8115 27.8715 34.6235 27.7595C33.2235 26.9195 31.5435 27.2995 30.4535 28.7195C30.3585 28.8445 28.7815 31.1445 28.2235 31.4885C28.0945 31.5685 27.9585 31.6115 27.8135 31.6315C27.4635 31.6615 27.1265 31.4815 26.5535 31.0985C26.2235 30.8885 25.8635 30.6495 25.4535 30.4795C23.7485 29.7665 22.4495 30.9445 21.7575 31.7345C21.7485 31.7425 19.8115 34.1045 19.7805 34.1415C19.5375 33.5505 19.3955 32.8675 19.3955 32.1025V23.8885ZM37.9995 23.8885C37.9995 20.3625 35.7305 18.0005 32.3535 18.0005H23.6375C20.2705 18.0005 17.9995 20.3625 17.9995 23.8885V32.1025C17.9995 33.6745 18.4465 35.0135 19.2375 36.0095C19.2465 36.0185 19.2465 36.0285 19.2555 36.0285C20.0425 37.0135 21.1655 37.6665 22.5185 37.8995C22.5305 37.9015 22.5425 37.9035 22.5555 37.9055C22.9025 37.9625 23.2615 38.0005 23.6375 38.0005H32.3535C32.5345 38.0005 32.6995 37.9665 32.8735 37.9535C33.0775 37.9365 33.2885 37.9325 33.4825 37.8985C33.7395 37.8545 33.9755 37.7775 34.2145 37.7035C34.3185 37.6705 34.4295 37.6505 34.5295 37.6125C34.7725 37.5205 34.9955 37.4015 35.2165 37.2795C35.2965 37.2355 35.3825 37.1995 35.4605 37.1505C35.6775 37.0145 35.8745 36.8555 36.0675 36.6895C36.1315 36.6345 36.2005 36.5845 36.2615 36.5265C36.4495 36.3475 36.6155 36.1505 36.7745 35.9445C36.8235 35.8795 36.8755 35.8195 36.9225 35.7525C37.0755 35.5345 37.2075 35.2995 37.3295 35.0545C37.3635 34.9835 37.3995 34.9145 37.4325 34.8425C37.5455 34.5855 37.6395 34.3165 37.7195 34.0345C37.7405 33.9585 37.7615 33.8835 37.7795 33.8055C37.8505 33.5145 37.9015 33.2145 37.9345 32.9005C37.9385 32.8625 37.9495 32.8275 37.9535 32.7895C37.9605 32.7045 37.9595 32.6195 37.9645 32.5345C37.9725 32.3885 37.9995 32.2535 37.9995 32.1025V23.8885Z" fill="white"/>
                    <path d="M24.5048 27.0001C25.8663 27.0001 27 25.87 27 24.5151C27 23.8356 26.7151 23.2132 26.2607 22.7615C25.8081 22.2935 25.1764 22.0001 24.4787 22.0001C23.1085 22.0001 22 23.1041 22 24.4687C22 24.6492 22.0213 24.8239 22.0591 24.9937C22.2878 26.1257 23.3081 27.0001 24.5048 27.0001Z" fill="white" fill-opacity="0.4"/>
                </svg>
                <h3>Add Your NFTs</h3>
                <p>Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                    <rect width="56" height="56" rx="16" fill="#DF4949"/>
                    <rect x="21" y="22" width="13" height="4" fill="white" fill-opacity="0.4"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.125 16H31.8375C35.225 16 37.9625 17.284 38 20.5478V38.7631C38 38.9671 37.95 39.1711 37.85 39.3511C37.6875 39.6391 37.4125 39.8551 37.075 39.9511C36.75 40.0471 36.3875 39.9991 36.0875 39.8311L27.9875 35.9432L19.875 39.8311C19.6888 39.9259 19.475 39.9871 19.2625 39.9871C18.5625 39.9871 18 39.4351 18 38.7631V20.5478C18 17.284 20.75 16 24.125 16ZM23.2753 25.1437H32.6878C33.2253 25.1437 33.6628 24.7225 33.6628 24.1958C33.6628 23.6678 33.2253 23.2478 32.6878 23.2478H23.2753C22.7378 23.2478 22.3003 23.6678 22.3003 24.1958C22.3003 24.7225 22.7378 25.1437 23.2753 25.1437Z" fill="white"/>
                </svg>
                <h3>List Them For Sale</h3>
                <p>Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
            </div>
        </div>
        <div class="relative bg-[#0d0d11] pt-[60px] pb-[116px] min-[723px]:">
        <p class="capitalize leading-[44px] font-bold text-[36px] text-white mb-[40px] ml-[255px]">New Posts</p>
        <div class="overflow-x-scroll flex gap-x-[30px]">
        @foreach($itemsToday as $item)
                <a href="{{route('item.detail', ['item' => $item->id])}}">
                    <div id="{{$item->category_id}}" class="text-white bg-[#343444] w-[330px] h-[511px] flex-shrink-0 p-[20px] rounded-[20px] items">
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
                                    </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="leading-[20px] font-normal text-[13px] text-[#8A8AA0]">Current Bid</p>
                            <div class="flex gap-x-[7px]">
                                <p id="Price" class=" leading-[26px] font-bold text-[18px] text-[#FFF] capitalize">{{$item->price}} ETH</p>
                                <p class=" leading-[20px] font-normal text-[13px] text-[#8A8AA0]">= ${{round(($item->price*12.246)/4.89, 2)}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="absolute start-0 bottom-[116px] h-[21px] w-[1920px] z-1 bg-[#0d0d11]"></div>
    </div>
        <div class="info">
        <div class="popularCollection">
                <div class="titles">
                    <p>Popular Collection</p>
                    <button>Explore more</button>
                </div>
                <div class="boxes">
                    <div class="box"></div>
                    <div class="box"></div>
                    <div class="box"></div>
                </div>
            </div>
            <div class="topSellers">
                <div class="titles">
                    <p>Top Seller</p>
                </div>
                <div class="sellersList">
                    <div class="list">
                        <div class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Crispin Berry</h3>
                            <p>214.2 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Windsor Lane</h3>
                            <p>120.7 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Blake Banks</h3>
                            <p>68.2 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Matt Ramos</h3>
                            <p>38.4 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Cristin Berry</h3>
                            <p>214.2 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Tommy Alvarez</h3>
                            <p>170.3 ETH</p>
                        </div>
                    </div>
                    
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Andy Hurlbutt</h3>
                            <p>82.79 ETH</p>
                        </div>
                    </div>
                    
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Monica Lucas</h3>
                            <p>52.8 ETH</p>
                        </div>
                    </div>
                    
                    <div class="list">
                        <div class="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Harper Wilcher</h3>
                            <p>29.2 ETH</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#5142FC"/>
                            <path d="M11.2799 18.3408C11.1396 18.4818 10.9484 18.5605 10.7496 18.5605C10.5509 18.5605 10.3596 18.4818 10.2194 18.3408L5.9849 14.1055C5.5454 13.666 5.5454 12.9535 5.9849 12.5148L6.51515 11.9845C6.95465 11.545 7.6664 11.545 8.1059 11.9845L10.7496 14.6283L17.8934 7.48453C18.3329 7.04503 19.0454 7.04503 19.4841 7.48453L20.0144 8.01478C20.4539 8.45428 20.4539 9.16678 20.0144 9.60553L11.2799 18.3408Z" fill="white"/>
                        </svg>
                        </div>
                        <div class="listInfo">
                            <h3>Cristin Berry</h3>
                            <p>214.2 ETH</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="today">
                <div class="titles">
                    <p>Today's Picks</p>
                    <button>Explore more</button>
                </div>
                <div class="flex gap-x-[30px] gap-y-[40px] flex-wrap">
        @foreach($itemsToday as $item)
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
                <button class="load">Load More</button>
            </div>
        </div>
    </div>
    
@endsection