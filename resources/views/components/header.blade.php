<div class="{{$color ?? 'bg-[#14141f]'}} flex items-center ps-[255px] pe-[268px] h-[80px] w-[1920px] border-b border-[hsla(240,10%,58%,0.4)] text-white">
    <a href="{{ route('welcome') }}" class="flex me-[200px] font-bold text-4xl leading-[56px] gap-x-[10px] items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="41" viewBox="0 0 30 41" fill="none">
            <path d="M18.75 0C10.2255 5.0344 11.25 19.2187 11.25 19.2187C11.25 19.2187 7.5 17.9375 7.5 12.1719C3.02601 14.831 0 19.9421 0 25.625C0 34.1164 6.71572 41 15 41C23.2843 41 30 34.1164 30 25.625C29.9999 13.1328 18.75 10.5703 18.75 0V0ZM16.3176 35.7023C13.3034 36.4725 10.2505 34.5924 9.49887 31.5027C8.74736 28.4131 10.5816 25.2838 13.596 24.5135C20.8732 22.6538 21.7852 18.4592 21.7852 18.4592C21.7852 18.4592 25.4141 33.3775 16.3176 35.7023Z" fill="url(#paint0_linear_161_67)"/>
            <defs>
            <linearGradient id="paint0_linear_161_67" x1="26.25" y1="-1.74884e-06" x2="-5.52352" y2="31.3469" gradientUnits="userSpaceOnUse">
            <stop stop-color="#E250E5"/>
            <stop offset="1" stop-color="#4B50E6"/>
            </linearGradient>
            </defs>
        </svg>
            Axies
    </a>
        <div class="flex gap-10 me-[125px] text-lg font-bold leading-[26px] w-[666px]">
                    <a href="{{ route('welcome') }}" class="flex text-center items-center">Home</a>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center py-2 border border-transparent text-base leading-[26px] font-bold text-white bg-transparent hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <div>Explore</div>

                            <div class="">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Explore
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
                    <p class="flex text-center items-center">Activity
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                        </svg>
                    </p>
                    <p class="flex text-center items-center">Community 
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                        </svg>
                    </p>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center py-2 border border-transparent text-base leading-[26px] font-bold text-white bg-transparent hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <div>Pages</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="Auth::check() ? route('author.main', ['user' => Auth::user()->id]) : ''">
                            Author
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('item.page')">
                            Create Item
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
                    <p class="flex text-center items-center">Contact 
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                        </svg>
                    </p>
                </div>
                <div class="me-9">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <mask id="mask0_646_2276" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="18" height="17">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66663 1.66663H17.6858V17.3322H1.66663V1.66663Z" fill="white" stroke="white"/>
                        </mask>
                        <g mask="url(#mask0_646_2276)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.67662 2.87309C5.94011 2.87309 2.90023 5.84502 2.90023 9.499C2.90023 13.153 5.94011 16.1257 9.67662 16.1257C13.4123 16.1257 16.4522 13.153 16.4522 9.499C16.4522 5.84502 13.4123 2.87309 9.67662 2.87309ZM9.6766 17.3322C5.2599 17.3322 1.6665 13.8181 1.6665 9.49899C1.6665 5.17985 5.2599 1.66663 9.6766 1.66663C14.0933 1.66663 17.6859 5.17985 17.6859 9.49899C17.6859 13.8181 14.0933 17.3322 9.6766 17.3322Z" fill="white"/>
                        <path d="M9.67662 2.37309C5.67463 2.37309 2.40023 5.55833 2.40023 9.499H3.40023C3.40023 6.13171 6.20558 3.37309 9.67662 3.37309V2.37309ZM2.40023 9.499C2.40023 13.4396 5.67455 16.6257 9.67662 16.6257V15.6257C6.20566 15.6257 3.40023 12.8664 3.40023 9.499H2.40023ZM9.67662 16.6257C13.6779 16.6257 16.9522 13.4395 16.9522 9.499H15.9522C15.9522 12.8664 13.1467 15.6257 9.67662 15.6257V16.6257ZM16.9522 9.499C16.9522 5.55837 13.6778 2.37309 9.67662 2.37309V3.37309C13.1468 3.37309 15.9522 6.13167 15.9522 9.499H16.9522ZM9.6766 16.8322C5.52546 16.8322 2.1665 13.5315 2.1665 9.49899H1.1665C1.1665 14.1047 4.99435 17.8322 9.6766 17.8322V16.8322ZM2.1665 9.49899C2.1665 5.46653 5.52539 2.16663 9.6766 2.16663V1.16663C4.99442 1.16663 1.1665 4.89317 1.1665 9.49899H2.1665ZM9.6766 2.16663C13.8277 2.16663 17.1859 5.46646 17.1859 9.49899H18.1859C18.1859 4.89324 14.3589 1.16663 9.6766 1.16663V2.16663ZM17.1859 9.49899C17.1859 13.5316 13.8277 16.8322 9.6766 16.8322V17.8322C14.3589 17.8322 18.1859 14.1047 18.1859 9.49899H17.1859Z" fill="white"/>
                        </g>
                        <mask id="mask1_646_2276" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13" y="13" width="6" height="6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2012 14.2999H18.3333V18.3333H14.2012V14.2999Z" fill="white" stroke="white"/>
                        </mask>
                        <g mask="url(#mask1_646_2276)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7166 18.3333C17.5596 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3309C14.1413 15.0952 14.1405 14.7131 14.3815 14.4775C14.6217 14.2402 15.0123 14.2418 15.2541 14.4759L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333Z" fill="white"/>
                        <path d="M17.7166 18.3333C17.5595 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3309C14.1413 15.0952 14.1405 14.7131 14.3815 14.4775C14.6217 14.2402 15.0123 14.2418 15.2541 14.4759L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333" stroke="white"/>
                        </g>
                    </svg>
                </div>
                <div>
                    <button class="h-12 w-[198px] rounded-3xl border border-solid border-[#5142FC] font-bold text-[15px] leading-[22px] flex items-center justify-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8074 6.98483H18.3333C18.3333 4.15383 16.637 2.5 13.7629 2.5H6.237C3.36292 2.5 1.66663 4.15383 1.66663 6.94872V13.0513C1.66663 15.8462 3.36292 17.5 6.237 17.5H13.7629C16.637 17.5 18.3333 15.8462 18.3333 13.0513V12.7913H14.8074C13.171 12.7913 11.8444 11.4979 11.8444 9.9025C11.8444 8.30707 13.171 7.01372 14.8074 7.01372V6.98483ZM14.8074 8.22701H17.7111C18.0547 8.22701 18.3333 8.49861 18.3333 8.83365V10.9425C18.3293 11.2759 18.053 11.5452 17.7111 11.5491H14.874C14.0456 11.56 13.3212 11.007 13.1333 10.2203C13.0392 9.73191 13.1713 9.22797 13.4942 8.84351C13.8171 8.45906 14.2978 8.2334 14.8074 8.22701ZM14.9333 10.4441H15.2074C15.5592 10.4441 15.8444 10.1661 15.8444 9.82306C15.8444 9.48004 15.5592 9.20197 15.2074 9.20197H14.9333C14.765 9.20004 14.603 9.26387 14.4833 9.3792C14.3636 9.49453 14.2962 9.65177 14.2963 9.81584C14.2962 10.16 14.5803 10.4402 14.9333 10.4441ZM5.61477 6.98483H10.3185C10.6703 6.98483 10.9555 6.70676 10.9555 6.36375C10.9555 6.02073 10.6703 5.74266 10.3185 5.74266H5.61477C5.26581 5.74263 4.98179 6.01633 4.97773 6.35652C4.97771 6.70073 5.26175 6.98088 5.61477 6.98483Z" fill="white"/>
                        </svg> Wallet connect {{$name ?? ''}}
                    </button>
                </div>
            </div>