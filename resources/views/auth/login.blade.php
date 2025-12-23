@extends('layout.login')

@section('title', 'Login - Klinik Wijaya')

@section('content')

<!-- Login Form Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        Email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        Password
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-6">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 text-[#3F5499] shadow-sm focus:ring-[#3F5499]">
                        <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mb-6">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-[#3F5499] hover:text-[#7AC6E4]">
                            Lupa Password?
                        </a>
                    @endif

                    <button type="submit" class="px-6 py-2 bg-[#3F5499] text-white rounded-lg hover:bg-[#7AC6E4] transition-colors duration-300">
                        Masuk
                    </button>
                </div>

                @if (Route::has('register'))
                    <div class="text-center">
                        <span class="text-sm text-gray-600">Belum punya akun?</span>
                        <a href="{{ route('register') }}" class="text-sm text-[#3F5499] hover:text-[#7AC6E4] font-semibold ml-1">
                            Daftar Sekarang
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</section>
@endsection
