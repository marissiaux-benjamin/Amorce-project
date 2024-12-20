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
            {{ $text }}
        </h1>
        <p>
            {{ $desc }}
        </p>
        <div class="flex justify-center gap-10 mt-5">
            @if(number_format($totalAmount[$compte->id]/100,2,',',' ') !== number_format(0,2,',',' ') )
                <div class="font-medium text-lg flex flex-col" x-data="{ contents: [] }">
                    <form wire:submit="delete()" class="flex flex-col gap-6">
                        <ul>
                            <li>
                                <livewire:input-montant-and-select :$compte :total="$this->totalAmount"/>
                            </li>
                            <template x-for="(content, index) in contents" :key="index">
                                <li class="mt-2" x-html="content"></li>
                            </template>
                        </ul>
                        <button
                            @click="contents.push('<input type=\'number\'/><select><option>?</option><option>?</option><option>?</option><option>?</option><option>?</option></select>')"

                            type="button"
                            class="w-full p-2 border-2 border-[#7C7C7C] rounded-xl group hover:border-[#2E2E2E] scale bg-transparent transition-all">
                            <svg width="20" height="20" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="ml-auto mr-auto icon-plus">
                                <path d="M13 3.25L13 13.25L13 23.25" stroke="" stroke-width="4"
                                      stroke-linecap="round"/>
                                <path d="M23 13.25H13L3 13.25" stroke="" stroke-width="4"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button
                            type="submit"
                            class="bg-[#FCC940] text-[#2E2E2E] rounded-lg py-1 px-10 hover:scale-105 transition-all">
                            Clôturer le compte
                        </button>
                    </form>

                </div>
            @elseif(number_format($totalAmount[$compte->id]/100,2,',',' ') === number_format(0,2,',',' '))
                <div class="font-medium text-lg">
                    <form wire:submit="delete()">
                        <button
                            type="submit"
                            class="bg-[#FCC940] text-[#2E2E2E] rounded-lg py-1 px-10 hover:scale-105 transition-all">
                            Clôturer le compte
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </section>
</div>
