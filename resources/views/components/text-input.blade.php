@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#14141f] h-[48px] px-5 py-[13px] font-normal text-sm text-white leading-[22px] border-[#343444] focus:border-white focus:ring-white rounded-md shadow-sm']) !!}>
