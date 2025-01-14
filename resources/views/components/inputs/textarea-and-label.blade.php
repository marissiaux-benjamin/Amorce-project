@props(['label_text', 'placeholder', 'field'])
<div class="flex flex-col">
    <label class="mb-2 text-lg font-bold" for="desc">
        {{ $label_text }}*
    </label>
    <textarea wire:model.blur="{{$field}}" name="desc" id="desc" rows="10" placeholder="{{ $placeholder }}"
              class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E]"></textarea>
    @error("form.description")
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>

