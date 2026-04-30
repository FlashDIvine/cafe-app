<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Login</h2>
        <p class="text-sm text-gray-500 mt-1">Masuk ke akun Anda untuk melanjutkan</p>
    </div>

    <form method="POST" action="{{ route('login') }}" onsubmit="
        const btn = document.getElementById('loginBtn');
        btn.innerHTML = 'Loading...';
        btn.classList.add('opacity-70', 'cursor-not-allowed');
        btn.disabled = true;
    ">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Masukkan email Anda"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan password"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('password')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 dark:border-gray-700 text-amber-800 focus:ring-amber-800 dark:bg-gray-900 shadow-sm">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-amber-800 hover:text-amber-900 hover:underline transition" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <button id="loginBtn" type="submit" class="w-full bg-amber-800 hover:bg-amber-900 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200 ease-in-out">
            Masuk
        </button>

        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-amber-800 hover:text-amber-900 hover:underline font-medium transition">Daftar</a>
        </div>
    </form>
</x-guest-layout>
