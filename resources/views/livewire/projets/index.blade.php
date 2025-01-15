<section class="mt-10">
    <h1 class="font-bold text-4xl mb-16">
        Liste des projets
    </h1>

    <section class="">
        <h1 class="hidden-titles">&Eacute;ligibles&nbsp;</h1>
        <ul class="py-8 px-10">
            @foreach ($projets as $projet)
                <li class="flex gap-10 justify-between mb-10 bg-[#DADADA] rounded-xl px-10 py-6 items-center">
                    <a wire:navigate href="/projets/{{ $projet->id }}" class="hover:no-underline  transition-all underline" title="Aller vers la page du projet détaillé">{{ $projet->name }}</a>
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


</section>

