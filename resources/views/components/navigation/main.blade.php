<div class="bg-[#FCC940] mb-32">
    <nav x-data="{ open: false }" class="h-20 mobile-menu flex justify-start items-center pl-10 pr-10 relative">
        <h1 class="opacity-0 absolute">Navigation principale</h1>
        <x-application-logo/>
        <div>
                <label for="checkbox" class="mobile-menu__btn hidden">
                    <div class="mobile-menu__icon flex"></div>
                </label>
                <input type="checkbox" id="checkbox" class="mobile-menu__checkbox hidden">

            <div class="mobile-menu__container">
                <ul class="flex mobile-menu__list">
                    @foreach($links as $link)
                        <li class="mobile-menu__item">
                            <x-nav-link title="Aller sur la page des comptes"
                                        text_color="text-[#2E2E2E]"
                                        text="{{ $link['name'] }}"
                                        url_route="{{ $link['url'] }}"/>
                        </li>
                    @endforeach
                        <li class="mobile-menu__item margin-left-full absolute right-10 top-6">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit"
                                        class="px-4 py-1 bg-red-500 text-[#FFFFFF] rounded-lg hover:scale-105 transition-all">Se
                                    Déconnecter
                                </button>
                            </form>
                        </li>
                </ul>
            </div>
        </div>


    </nav>
</div>
