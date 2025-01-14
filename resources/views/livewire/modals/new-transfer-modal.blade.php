<div x-data="{ open: @entangle('isOpened') }"
     x-show="open"
     x-transition:enter="transform transition ease-out duration-300"
     x-transition:enter-start="translate-x-1/2 opacity-0"
     x-transition:enter-end="translate-x-0 opacity-100"
     x-transition:leave="transform transition ease-in duration-300"
     x-transition:leave-start="translate-x-0 opacity-100"
     x-transition:leave-end="translate-x-1/2 opacity-0"
     class="fixed inset-0 z-50 flex justify-end overflow-y-auto hover:border-gray-300 bg-[#2C2C2C] bg-opacity-40 backdrop-blur-sm filter">
    <section class="flex flex-col justify-center w-1/2 h-full bg-[#E9E9E9] px-16 relative">
        <h1 class="font-bold text-6xl mb-8">Nouveau Transfert</h1>
        <form action="" method="POST">
            @csrf
            <div class="flex gap-10">
                <div class="flex flex-col flex-1 mb-6">
                    <label class="mb-2 text-lg font-bold" for="de">
                        De
                    </label>
                    <select class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E]" name="de" id="de">
                        @foreach($comptes as $compte)
                            <option value="{{ $compte->name }}">{{ $compte->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col flex-1 mb-6">
                    <label class="mb-2 text-lg font-bold" for="destination">
                        Vers
                    </label>
                    <select class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E]" name="destination" id="destination">
                        <option></option>
                        @foreach($comptes as $compte)
                            <option value="{{ $compte->name }}">{{ $compte->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <x-inputs.input-and-label-number label_text="Montant" type="number" placeholder="ex: 20" field="" for="amount" name="amount" id="amount"/>
            <x-inputs.textarea-and-label label_text="Communication" type="text" placeholder="Argent attribué par la détente" field="" for="communication" name="communication" id="communication"/>
            <x-buttons.form-button text="Enregistrer"/>
        </form>
        <x-buttons.cross-button route="{{ route('comptes.index') }}" position_x="top-8" position_y="left-16"/>
    </section>
</div>

