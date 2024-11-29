<div x-data="{ open: @entangle('isOpened') }"
     x-show="open"
     x-transition:enter="transform transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transform transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-50 backdrop-blur-sm bg-[#2C2C2C] bg-opacity-40 flex justify-center items-center">
    <section class="relative bg-[#E9E9E9] rounded-xl px-16 pt-20 pb-10">
        <x-buttons.cross-button position_y="top-4" position_x="left-4"/>
        <h1 class="font-bold text-2xl">
            Êtes vous sûr de vouloir supprimer ce compte?
        </h1>
        <p>
            Une fois supprimé, l&lsquo;argent restant ira automatiquement dans le Fond Général
        </p>
        <div class="flex justify-center gap-10 mt-5">
            <x-buttons.delete-button route="" bg_color="bg-[#FCC940]"
                                     text_color="text-[#2C2C2C]" text="Oui"/>
            <button wire:click="closeModal"
                    class="bg-[#2C2C2C] text-[#FCC940] py-1 px-10 rounded-lg hover:scale-105 transition-all">
                Non
            </button>
        </div>
    </section>
</div>
