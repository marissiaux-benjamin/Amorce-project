@props(['label_text','type','placeholder'])
<div class="flex flex-col">
    <label class="mb-2 text-lg font-bold">
        {{ $label_text }}*
    </label>
    <textarea wire:model.blur="form.description" rows="10" type="{{ $type }}" placeholder="{{ $placeholder }}" class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E] bg-transparent"></textarea>
    @error("form.description")
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

