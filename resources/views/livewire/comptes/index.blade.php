<section class="flex gap-14 mt-10 mb-16">
    <h1 class="hidden-titles">
        Fonds de L'Amorce
    </h1>
    <div class="w-full">
        <div
            class="relative bg-[#DADADA] text-[#9D9D9D] rounded-2xl py-12 mb-8 mr-auto ml-auto max-width-block shadow-lg border-2 border-[#9D9D9D] scale hover:border-[#2C2C2C] hover:text-[#2C2C2C] group transition-all">
            <button title="Importer un fichier" wire:click="dispatchTo('import-file-modal','openModal')"
                    class="absolute top-0 bottom-0 left-0 right-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="50" height="50" viewBox="0 0 48 48"
                     class="mx-auto mb-2 icon-plus">
                    <path
                        fill="currentColor"
                        stroke="none"
                        d="M 12.5 4 C 10.032499 4 8 6.0324991 8 8.5 L 8 39.5 C 8 41.967501 10.032499 44 12.5 44 L 33.5 44 L 35.5 44 C 36.029 44 36.529 43.892609 37 43.724609 L 37 40 L 36.908203 40 C 36.701203 40.581 36.151 41 35.5 41 L 33.5 41 L 12.5 41 C 11.653501 41 11 40.346499 11 39.5 L 11 8.5 C 11 7.6535009 11.653501 7 12.5 7 L 24 7 L 24 15.5 C 24 17.967501 26.032499 20 28.5 20 L 37 20 L 37 24.5 L 37 29.050781 L 38.025391 28.025391 C 38.564391 27.486391 39.267 27.166406 40 27.066406 L 40 23.5 L 40 18.5 A 1.50015 1.50015 0 0 0 39.560547 17.439453 L 39.544922 17.423828 L 26.560547 4.4394531 A 1.50015 1.50015 0 0 0 25.5 4 L 12.5 4 z M 27 9.1210938 L 34.878906 17 L 28.5 17 C 27.653501 17 27 16.346499 27 15.5 L 27 9.1210938 z M 40.5 29 C 40.116 29 39.732453 29.146453 39.439453 29.439453 L 34.439453 34.439453 C 33.854453 35.025453 33.854453 35.974547 34.439453 36.560547 C 35.025453 37.146547 35.974547 37.146547 36.560547 36.560547 L 39 34.121094 L 39 44.5 C 39 45.329 39.671 46 40.5 46 C 41.329 46 42 45.329 42 44.5 L 42 34.121094 L 44.439453 36.560547 C 45.025453 37.146547 45.974547 37.146547 46.560547 36.560547 C 47.146547 35.975547 47.146547 35.024453 46.560547 34.439453 L 41.560547 29.439453 C 41.268547 29.146453 40.884 29 40.5 29 z"></path>
                </svg>
                Importer un fichier
            </button>
        </div>
        <div class="grid md:grid-cols-2 gap-6 w-full max-width-block mr-auto ml-auto">
            @foreach($comptes as $compte)
                <a wire:navigate href="/comptes/{{ $compte->id }}" class="scale transition-all">
                    <livewire:grosse-carte :$compte :total="$this->totalAmount" wire:key="comptes-{{$compte->id}}"/>
                </a>
            @endforeach
            <livewire:add-account-button/>
        </div>
    </div>
    <livewire:add-account-modal/>
    <livewire:import-file-modal/>
</section>
