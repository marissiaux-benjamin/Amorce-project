<div class="relative">
    <livewire:back-button/>
    <livewire:compte-details :$compte :total="$this->totalAmount"/>
    <div content="" class="m-auto w-full h-1 rounded-full mt-8 mb-16 bg-[rgba(46,46,46,0.20)]"></div>
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
                    <svg class="shrink-0 ml-4 mr-2 w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <polygon points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon>
                    </svg>
                    <div class="py-4 text-white text-sm font-medium" x-html="$wire.feedback"></div>
                </div>
            </div>
        </div>
    </template>
    <div class="flex gap-5 absolute right-16">
        <livewire:transfert-button/>
        <livewire:add-button/>
    </div>
    <livewire:transactions :$compte/>
    <livewire:add-manually-modal/>
    <livewire:delete-account-modal :$compte
                                   :total="$this->totalAmount"
                                   text="Êtes vous sûr de vouloir supprimer ce compte?"
                                   desc="Une fois supprimé, l'argent restant ira automatiquement dans le Fond Général"/>
    <livewire:new-transfer-modal/>
    <livewire:edit-account-modal :$compte/>
</div>

