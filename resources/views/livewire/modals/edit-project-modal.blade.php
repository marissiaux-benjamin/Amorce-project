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
        <h1 class="font-bold text-6xl mb-8">Modifier le projet</h1>
        <x-buttons.cross-button route="{{ route('projets.index') }}" position_x="top-8" position_y="left-16"/>
        <div>

            <template x-if="$wire.feedback">

                <div x-data="{
                                init(){
                                setTimeout(function(){
                                    $wire.feedback = false;
                                },2000)
                                }
                                }">
                    <div class="transition-all absolute top-24 flex items-center justify-between mb-8 max-w-3xl bg-[#47B134] rounded-xl pr-8">
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
                           class="border-2 py-3 px-6 rounded-xl text-[#2E2E2E]">
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
    </section>
</div>
