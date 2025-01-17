<div class="bg-[#FCC940] flex justify-between items-center pr-16">
    <nav x-data="{ open: false }" class="h-20  flex items-center pl-10 pr-10">
        <h1 class="opacity-0 absolute">Navigation principale</h1>
        <x-application-logo/>

        @foreach($links as $link)
            <x-nav-link title="Aller sur la page des comptes"
                        text_color="text-[#2E2E2E]"
                        text="{{ $link['name'] }}"
                        url_route="{{ $link['url'] }}"/>
        @endforeach


    </nav>
    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button type="submit" class="px-4 py-1 bg-red-500 text-[#FFFFFF] rounded-lg hover:scale-105 transition-all">Se
            Déconnecter
        </button>
    </form>
</div>
