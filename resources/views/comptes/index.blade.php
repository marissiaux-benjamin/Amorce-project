<x-app-layout>

    <section class="flex gap-14 mt-10">
        <h1 class="hidden">
            Fonds de L'Amorce
        </h1>
        <div class="grid md:grid-cols-2 gap-6 w-full">
            @foreach($comptes as $compte)
                <a href="/comptes/{{ $compte->id }}" class="scale transition-all">
                    <x-cartes.grosse-cartes nom_fond="{{ $compte->name }}" solde="{{ $compte->total }}" ajout=""/>
                </a>
            @endforeach
            <livewire:add-account-modal/>
        </div>
    </section>
</x-app-layout>
