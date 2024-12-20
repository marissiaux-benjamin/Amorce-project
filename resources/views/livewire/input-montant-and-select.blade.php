<div class="flex flex-row justify-between gap-6">
    <div class="flex flex-col w-1/3">
        <label class="mb-2 text-lg font-bold">
            Montant
        </label>
        <input wire:model.blur="" type="number" placeholder="20"
               class="border-2 py-2 px-6 rounded-xl text-[#2E2E2E] bg-transparent">
    </div>
    <div class="flex flex-col flex-auto">
        <label class="mb-2 text-lg font-bold" for="comptes">
            Vers
        </label>
        <select class="border-2 py-2 px-6 rounded-xl text-[#2E2E2E] bg-transparent" name="comptes"
                id="comptes">
            @foreach($comptes as $compte)
                @if($compte->name !== $currentCompteName)
                    <option value="{{ $compte->name }}">{{ $compte->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
