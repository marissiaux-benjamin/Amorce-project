<section class="bg-[#DADADA] rounded-2xl p-5 pt-8 pb-8 shadow-lg">
    <h1 class="font-bold text-2xl">{{ $compte->name }}</h1>
    <div class="mt-4">
        <p>
            <span class="font-bold text-lg">Solde&nbsp;:</span> {{ number_format($total[$compte->id]/100,2,',',' ') ?? 0 }}€
        </p>
        <p>
            <span class="font-bold text-lg">Ajout récent&nbsp;:</span> €
        </p>
    </div>
</section>
