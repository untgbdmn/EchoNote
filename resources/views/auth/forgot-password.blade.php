<x-guest-layout>
    <div class="border w-full max-w-[40%] h-full py-7 rounded-lg">
        <div class="flex flex-col items-center gap-y-2 mb-20">
            <h1 class="text-3xl font-bold text-blue-500 font-sans">EchoNote</h1>
            <p class="px-20 text-center text-sm"><span class="font-bold text-blue-400">EchoNote</span> adalah
                platform blog yang memungkinkan setiap cerita untuk bergema dan ditemukan.</p>
        </div>

        <div class="px-8">
            <div class="mb-4 text-sm text-center text-white">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            {{-- Session Status --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                {{-- Email Address --}}
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4 w-full">
                    <x-primary-button class="w-full flex items-center justify-center">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
