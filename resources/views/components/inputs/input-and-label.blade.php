@props(['label_text','type','placeholder'])
<div class="flex flex-col mb-6">
    <label class="mb-2 text-lg font-bold">
        {{ $label_text }}*
    </label>
    <input wire:model.blur="form.name" type="{{ $type }}" placeholder="{{ $placeholder }}"
           class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E] bg-transparent">
    @error("form.name")
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
