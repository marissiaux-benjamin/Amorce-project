<section class="mt-6">
    <div class="flex flex-row gap-32 items-center mb-8">
        <h1 class="text-4xl font-bold">
            {{ $compte->name }}
        </h1>
        <p class="font-bold text-4xl">
            <span class="text-2xl"> Total&nbsp;: </span>{{ number_format($total[$compte->id]/100,2,',',' ') ?? 0 }}  €
        </p>
        @if($compte->id !== 1 && $compte->id !== 2)
            <div class="flex gap-6">
                <livewire:modify-button/>
                <livewire:delete-confirmation-button/>
            </div>
        @endif
    </div>
    <p>
        {{ $compte->description }}
    </p>
</section>
