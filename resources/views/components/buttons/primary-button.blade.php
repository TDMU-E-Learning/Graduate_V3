<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center gap-2 center font-bold hover:bg-blue-700 text-white font-bold py-2 px-25 rounded-lg uppercase']) }}>
    {{ $slot }}
</button>
