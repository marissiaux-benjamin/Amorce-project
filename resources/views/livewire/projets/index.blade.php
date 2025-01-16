<section class="mt-10">
    <div class="flex justify-between items-center px-10 w-full mb-8">
        <h1 class="w-1/2 font-bold text-4xl">
            Liste des projets
        </h1>
        <form x-data="{searchButton:true}" class="flex h-fit w-1/2 rounded-xl">
            <div class="relative rounded-xl w-full">
                <input
                    class="w-full border-none bg-[#D9D9D9] text-[#2E2E2E] placeholder:opacity-70 placeholder-grey-300 relative pl-10 pr-6 py-2 rounded-l-lg"
                    autocomplete="off"
                    type="text"
                    name="search"
                    wire:model.live="search"
                    placeholder="Nom du projet">
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

    <section class="">
        <h1 class="hidden-titles">&Eacute;ligibles&nbsp;</h1>
        <ul class="py-8 px-10">
            <li>
                <livewire:add-projet-button/>
            </li>
            @foreach ($projets as $projet)
                <li wire:key="li-{{$projet->name}}"
                    class="flex gap-10 justify-between mb-10 bg-[#DADADA] rounded-xl px-10 py-6 items-center">
                    <a wire:navigate href="/projets/{{ $projet->id }}"
                       class="hover:no-underline  transition-all underline"
                       title="Aller vers la page du projet détaillé">{{ $projet->name }}</a>
                    <p>Statut actuel : <strong>{{ $projet->status }}</strong></p>

                    <form wire:submit.prevent="updateStatus({{ $projet->id }}, $event.target.status.value)">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="border-2 rounded-xl mr-4">
                            @foreach (\App\Enums\ProjectStatus::cases() as $status)
                                <option
                                    value="{{ $status->value }}" {{ $projet->status == $status->value ? 'selected' : '' }}>
                                    {{ $status->value }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit"
                                class="bg-[#FCC940] text-[#2E2E2E] py-2 px-4 rounded-xl scale transition-all ">Changer
                            le statut
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </section>
    <livewire:add-projet-modal/>
</section>

