<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="border py-5 px-2 rounded-lg max-w-[60%] mx-auto">
            <div class="px-3">

                {{-- Heading Section --}}
                <div class="flex flex-col items-center gap-y-2">
                    <h1 class="text-3xl font-bold text-blue-500 font-sans">EchoNote</h1>
                    <p class="px-20 text-center text-sm"><span class="font-bold text-blue-400">EchoNote</span> adalah
                        platform blog yang memungkinkan setiap cerita untuk bergema dan ditemukan.</p>
                    <h1 class="text-2xl font-bold">Login</h1>
                </div>

                {{-- Input Group --}}
                <div class="px-5">
                    {{-- Email Address --}}
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Remember Me --}}
                    <div class="mt-4 flex flex-row items-center justify-between mb-2">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-white hover:text-blue-400 transition-colors duration-300"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-col gap-1">
                        <x-primary-button class="text-center flex items-center justify-center mt-1 w-full">
                            {{ __('Log in') }}
                        </x-primary-button>
                        <span class="">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 font-bold">Register Here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
