<div>
    <template x-if="$wire.feedback">

        <div x-data="{
    init(){
    setTimeout(function(){
        $wire.feedback = false;
    },2000)
    }
    }">
            <div
                class="absolute top-60 left-2/3 flex items-center justify-between mb-8 max-w-3xl bg-[#47B134] rounded pr-8">
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
    <section class="w-full grid mt-10 mb-5">
        <h1 class="hidden">transactions</h1>
        <table class="border-separate border-spacing-y-5 w-full">
            <thead>
            <tr class="text-left font-bold">
                <th class="pr-32 pl-10">Date</th>
                <th class="pr-40">Communication</th>
                <th class="pr-40">Montant</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->transactions as $transaction)
                <tr wire:key="table-{{$transaction->id}}" class="relative mb-32 h-20 shadow-lg rounded-xl">
                    <td class="bg-[#DADADA] rounded-l-xl pl-10">
                        {{ \Carbon\Carbon::parse($transaction->date)->format('d F Y') }}
                    </td>
                    <td class="bg-[#DADADA]">
                        <span class="font-bold">Communication&nbsp;:</span> {{ $transaction->communication }}
                    </td>
                    <td class="bg-[#DADADA]">
                        @if($transaction->montant<0)
                            <span class="text-[#B13434]">
                                {{number_format($transaction->montant/100,2,',',' ') }}&nbsp;€
                            </span>
                        @else
                            <span class="text-[#47B134]">
                                {{number_format($transaction->montant/100,2,',',' ') }}&nbsp;€
                            </span>
                        @endif
                    </td>
                    <td class="bg-[#DADADA] rounded-r-xl">
                        <button
                            wire:click="$dispatchTo('delete-transaction-modal','openModal',{id:{{$transaction->id}}})"
                            class="bg-[#2E2E2E] text-[#FCC940] px-6 py-2 rounded-lg hover:scale-105 transition-all">
                            Supprimer
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $this->transactions->links('vendor.livewire.tailwind',data:['scrollTo'=>false]) }}
    </section>
    <livewire:delete-transaction-modal :$compte/>
</div>
