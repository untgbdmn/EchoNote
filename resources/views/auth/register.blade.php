<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="border py-5 px-2 rounded-lg mx-auto">
            <div class="px-3">

                {{-- Heading Section --}}
                <div class="flex flex-col items-center gap-y-2">
                    <h1 class="text-3xl font-bold text-blue-500 font-sans">EchoNote</h1>
                    <p class="px-20 text-center text-sm"><span class="font-bold text-blue-400">EchoNote</span> adalah
                        platform blog yang memungkinkan setiap cerita untuk bergema dan ditemukan.</p>
                    <h1 class="text-2xl font-bold">Register</h1>
                </div>

                {{-- Input Group --}}
                <div class="px-5 flex flex-col">
                    {{-- Name --}}
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Email Address --}}
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-2 gap-5">

                        {{-- Password --}}
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    {{-- Footer Register --}}
                    <div class="my-3 flex flex-col gap-2">
                        <x-primary-button class="w-full flex items-center justify-center">
                            {{ __('Register') }}
                        </x-primary-button>
                        <a class="text-sm text-white hover:text-blue-400 transition-colors duration-300"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
