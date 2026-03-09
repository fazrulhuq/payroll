<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 px-6 py-4 bg-green-50 border border-green-200 rounded-md text-green-800" :status="session('status')" />

    <div class="px-6 py-8">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Sign in to your account</h2>
            <p class="mt-2 text-sm text-gray-600">Welcome back! Please sign in to continue.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" name="remember">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500">
                    {{ __('Sign in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
