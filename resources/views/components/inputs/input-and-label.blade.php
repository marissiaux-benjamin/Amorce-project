@props(['label_text','type','placeholder','field'])
<div class="flex flex-col mb-6">
    <label class="mb-2 text-lg font-bold">
        {{ $label_text }}*
    </label>
    <input wire:model.blur="{{$field}}" type="{{ $type }}" placeholder="{{ $placeholder }}"
           class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E] bg-white">
    @error("form.name")
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
