<div class="flex flex-row justify-between gap-6">
    <div class="flex flex-col w-1/3">
        <label class="mb-2 text-lg font-bold">
            Montant
        </label>
        <input wire:model.blur="" type="text" placeholder="20"
               class="border-2 py-2 px-6 rounded-xl text-[#2E2E2E]">
    </div>
    <div class="flex flex-col flex-auto">
        <label class="mb-2 text-lg font-bold" for="comptes">
            Vers
        </label>
        <select class="border-2 py-2 px-6 rounded-xl text-[#2E2E2E]" name="comptes"
                id="comptes">
            @foreach($comptes as $compte)
                @if($compte->name !== $currentCompteName)
                    <option wire:key="select-{{$compte->name}}" value="{{ $compte->name }}">{{ $compte->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
