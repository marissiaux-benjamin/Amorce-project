@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-[#2E2E2E]']) }}>
    {{ $value ?? $slot }}
</label>
