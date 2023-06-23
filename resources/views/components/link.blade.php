@props(['route', 'text', 'color'])

@php
if($color == 'red'){
  $classes = 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
  $styles = '';
}
else{
  $classes = 'inline-flex items-center px-4 py-2 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
  $styles = 'background-image: linear-gradient(to right, #1793CB, #0DD9AB);';
}
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes, 'style' => $styles]) }}>
  {{ $text }}
</a>