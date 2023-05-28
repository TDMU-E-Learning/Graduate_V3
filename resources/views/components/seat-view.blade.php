
@props(['link'])



<a href = '{{$link}}'{{ $attributes->merge(['class' => 'seat-button text-center font-bold hover:bg-blue-700 text-white py-2 px-[25px] rounded-lg w-36 bg-[var(--primary-color)] cursor-pointer']) }}>
    {{ $slot }}
</a>
