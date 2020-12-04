<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
		<a href="{{url('/')}}" class="footer__block-logo"><img style="height:100px;"src="{{asset('assets/images/logo.png')}}" alt=""></a>				
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Mot de passe oublié? Aucun problème. Faites-nous simplement savoir votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation du mot de passe qui vous permettra d en choisir un nouveau.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Lien de réinitialisation du mot de passe') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
