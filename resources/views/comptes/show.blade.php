<x-app-layout>
    <section class="mt-16">
        <div class="flex flex-row gap-32 items-center mb-8">
            <h1 class="text-4xl font-bold">
                {{ $compte->name }}
            </h1>
            <p class="font-bold text-4xl">
                <span class="text-2xl"> Total&nbsp;: </span>{{ $compte->total }} €
            </p>
        </div>
        <p>
            {{ $compte->description }}
        </p>
    </section>
    <div content="" class="m-auto w-full h-1 rounded-full mt-8 mb-16 bg-[rgba(46,46,46,0.20)]"></div>
    <div class="flex justify-between items-center mr-4 w-full rounded-xl">
        <div class="w-1/2">
            <form x-data="{searchButton:true}" class="flex w-full rounded-xl">
                <div class="w-full relative rounded-xl">
                    <input
                        class="border-none bg-[#D9D9D9] text-[#2E2E2E] placeholder:opacity-70 w-full placeholder-grey-300 relative pl-10 pr-6 py-2 rounded-l-lg"
                        autocomplete="off"
                        type="text"
                        name="search"
                        wire:model.live="search"
                        placeholder="Nom du compte">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="absolute top-2.5 left-2">
                        <g opacity="0.5">
                            <path
                                d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.14583 15.3708 4.8875 14.1125C3.62917 12.8542 3 11.3167 3 9.5C3 7.68333 3.62917 6.14583 4.8875 4.8875C6.14583 3.62917 7.68333 3 9.5 3C11.3167 3 12.8542 3.62917 14.1125 4.8875C15.3708 6.14583 16 7.68333 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8125 13.5625 12.6875 12.6875C13.5625 11.8125 14 10.75 14 9.5C14 8.25 13.5625 7.1875 12.6875 6.3125C11.8125 5.4375 10.75 5 9.5 5C8.25 5 7.1875 5.4375 6.3125 6.3125C5.4375 7.1875 5 8.25 5 9.5C5 10.75 5.4375 11.8125 6.3125 12.6875C7.1875 13.5625 8.25 14 9.5 14Z"
                                fill="#1D1B20"/>
                        </g>
                    </svg>
                </div>
                <template x-if="searchButton">
                    <button type="submit"
                            class="px-4 bg-[#FCC940] text-[#2E2E2E] rounded-r-lg hover:scale-105 transition-all">
                        Rechercher
                    </button>
                </template>
            </form>
        </div>

        <div class="flex gap-5">
            <x-buttons.transfert action="#"/>
            <livewire:add-button/>
        </div>
    </div>
    <livewire:transactions :$compte :$transactions/>

    <livewire:create-account-modal/>
</x-app-layout>
