<div>

    <template x-if="$wire.feedback">

        <div x-data="{
    init(){
    setTimeout(function(){
        $wire.feedback = false;
    },2000)
    }
    }">
            <div class="absolute top-24 flex items-center justify-between mb-8 max-w-3xl bg-[#47B134] rounded pr-8">
                <div class="flex items-center">
                    <svg class="shrink-0 ml-4 mr-2 w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <polygon points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon>
                    </svg>
                    <div class="py-4 text-white text-sm font-medium" x-html="$wire.feedback"></div>
                </div>
            </div>
        </div>
    </template>
    <form wire:submit="save">
        <div class="flex flex-col mb-6">
            <label class="mb-2 text-lg font-bold">
                Nom*
            </label>
            <input wire:model.blur="form.name" type="text" placeholder="nom: Robert Industries"
                   class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E] bg-transparent">
            @error("form.name")
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <x-inputs.textarea-and-label label_text="Description"
                                     placeholder="exemple: Asbl qui vise a améliorer les ruches de Belgique."
                                     field="form.description"/>
        <x-buttons.form-button text="Enregistrer"/>
    </form>
</div>
