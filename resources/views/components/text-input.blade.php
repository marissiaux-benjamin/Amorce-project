@props(['placeholder'] )

<input placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'border-[#2E2E2E] border-opacity-75 bg-transparent border-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg']) }}>
