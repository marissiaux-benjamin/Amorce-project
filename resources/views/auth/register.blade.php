<x-guest-layout>

    <h1 class="font-bold text-6xl mb-32 text-center">
        Enregistrer-vous
    </h1>

    <form method="POST" action="{{ route('comptes.index') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Prénom</label>
            <x-text-input placeholder="ex: Robert"
                          id="name" class="block mt-1 w-full" type="text" name="name"
                          :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <div class="mt-4">
            <label for="surname">Nom</label>
            <x-text-input placeholder="ex: De Neuville"
                          id="surname" class="block mt-1 w-full" type="text"
                          name="surname" :value="old('surname')" required
                          autofocus autocomplete="surname"/>
            <x-input-error :messages="$errors->get('surname')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">Email</label>
            <x-text-input placeholder="ex: robertdeneuville@gmail.com"
                          id="email" class="block mt-1 w-full" type="email"
                          name="email" :value="old('email')"
                          required autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Mot de passe</label>
            <x-text-input placeholder="ex: Ch4nG3_tH1s"
                          id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-center mt-8">
            <x-primary-button>
                {{ __('S\'enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
