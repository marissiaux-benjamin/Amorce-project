@props(['nom_fond', 'solde', 'ajout'])

<div class="bg-[#DADADA] rounded-2xl p-5 pt-8 pb-8 shadow-lg">
    <h1 class="font-bold text-2xl">{{ $nom_fond }}</h1>
    <div class="mt-4">
        <p>
            <span class="font-bold text-lg">Solde&nbsp;:</span> {{ $solde }}€
        </p>
        <p>
            <span class="font-bold text-lg">Ajout récent&nbsp;:</span> {{ $ajout }}€
        </p>
    </div>
</div>
