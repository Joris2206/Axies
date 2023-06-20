@extends('layouts.main')
@section('main')
    <x-header color="bg-[#32323f]"></x-header>
    <x-headDetail name="Signup"></x-headDetail>
    <div class="px-[615px] pt-[80px] pb-[209px] w-[1920px]">
    
        <h1 class="text-[#FFF] leading-[44px] text-center font-bold text-4xl mb-[64px]">Signup To NFTs</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex flex-row flex-auto items-center mb-[30px] ">
                <hr class="w-full border-[#343444]">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="mx-4 text-[#ebebeb] dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm leading-7 text-lg font-normal min-w-[152px] ">Or Login With Email</a>
                @endif
                <hr class="w-full border-[#343444]">
            </div>
            <!-- Name -->
            <div>
                <x-text-input placeholder="Your Full Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input placeholder="Your Email Address" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input placeholder="Set Your Password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input placeholder="Confirm Your Password" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex justify-between items-center my-[32px]">
                <!-- Remember Me -->
                <div class="block h-5">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded bg-transparent border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <x-primary-button class="w-full flex items-center justify-center">
                {{ __('Login') }}
            </x-primary-button>
        </form>
    </div>
@endsection
