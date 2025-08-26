<section>
    <livewire:back-button route="projets.index"/>
    <template x-if="$wire.feedback" class="sticky-own">
        <div x-data="{
                                init(){
                                setTimeout(function(){
                                    $wire.feedback = false;
                                },2000)
                                }
                                }">
            <div
                class="flex items-center justify-between max-w-3xl bg-[#47B134] rounded-xl pr-8">
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
    <div class="text-center flex flex-col justify-center items-center py-16 px-8">
        <h1 class="text-4xl font-extrabold text-[#2E2E2E] mb-16">
            {{$this->projet->name}}
        </h1>
        <div class="bg-[#FCC940] text-[#2E2E2E] py-4 px-6 rounded-xl mb-8">
            <p class="text-2xl font-semibold">
                <strong>Statut&nbsp;:</strong> {{ $projet->status }}
            </p>
        </div>
        <p class="text-xl text-[#2E2E2E] max-w-3xl mx-auto mb-16 px-8 py-10 bg-[#DADADA] rounded-xl">
            {{$projet->description}}
        </p>
        <div class="flex gap-10">
            <button wire:click="dispatchTo('edit-project-modal','openModal')"
                    class="py-2 px-4 bg-[#FCC940] text-[#2C2C2C] rounded-xl hover:scale-105 transition-all">
                Modifier le projet
            </button>
            @if($projet->status !== 'éligible')
                <button
                    wire:click="$dispatchTo('delete-project-modal','openModal',{id:{{$projet->id}}})"
                    class="bg-[#2E2E2E] text-[#FCC940] px-6 py-2 rounded-lg hover:scale-105 transition-all">
                    Supprimer
                </button>
            @endif
        </div>
    </div>
    <livewire:edit-project-modal :$projet/>
    <livewire:delete-project-modal :$projet/>
</section>
