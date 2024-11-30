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
        <h1 class="font-bold text-6xl mb-8">Ajouter un compte</h1>
        <x-buttons.cross-button route="{{ route('comptes.index') }}" position_x="top-8" position_y="left-16"/>
        <livewire:comptes-create/>
    </section>
</div>

