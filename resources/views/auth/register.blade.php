<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Register</h2>
        <p class="text-sm text-gray-500 mt-1">Buat akun baru untuk memulai</p>
    </div>

    <form method="POST" action="{{ route('register') }}" onsubmit="
        const btn = document.getElementById('registerBtn');
        btn.innerHTML = 'Loading...';
        btn.classList.add('opacity-70', 'cursor-not-allowed');
        btn.disabled = true;
    ">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Masukkan nama Anda"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('name')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Masukkan email Anda"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Buat password (min. 8 karakter)" minlength="8"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('password')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi password Anda" minlength="8"
                   class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-amber-800 focus:ring-2 focus:ring-amber-800 shadow-sm transition duration-150">
            @error('password_confirmation')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button id="registerBtn" type="submit" class="w-full bg-amber-800 hover:bg-amber-900 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200 ease-in-out">
            Daftar
        </button>

        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-amber-800 hover:text-amber-900 hover:underline font-medium transition">Login</a>
        </div>
    </form>
</x-guest-layout>
