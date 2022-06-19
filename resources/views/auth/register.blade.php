<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Photo -->
            <div>
                <x-label for="photo" :value="__('Photo')" />

                <x-input id="photo" class="block mt-1 w-full rounded border-4" type="file" name="photo" :value="old('photo')" required />
            </div> 

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> 
            
            <!-- LastName -->
            <div>
                <x-label for="last_name" :value="__('Prenom')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>
             
            <!-- UserName -->
            <div>
                <x-label for="user_name" :value="__('Nom d\'Utilisateur')" />

                <x-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')" required />
            </div>              
            
            <!-- Role -->
            <div>
                <x-label for="role" :value="__('Role')" />

                <select id="role" class="block mt-1 w-full rounded" name="role" :value="old('role')" required>
                    <option value="secretaire" selected>Secretaire</option>
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de Passe')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer Mot de Passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Avez-vous deja un compte ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Creer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>