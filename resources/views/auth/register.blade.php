@extends('layout.main')

@section('title', 'Register - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[400px] bg-gray-900">
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Register</h1>
                <p class="text-xl md:text-2xl text-white/90">Buat Akun Admin Baru</p>
            </div>
        </div>
    </div>
</section>

<!-- Register Form Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        Nama Lengkap
                    </label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        Email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
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
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                        Konfirmasi Password
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499]">
                </div>

                <div class="flex items-center justify-end mb-6">
                    <button type="submit" class="w-full px-6 py-2 bg-[#3F5499] text-white rounded-lg hover:bg-[#7AC6E4] transition-colors duration-300">
                        Daftar
                    </button>
                </div>

                <div class="text-center">
                    <span class="text-sm text-gray-600">Sudah punya akun?</span>
                    <a href="{{ route('login') }}" class="text-sm text-[#3F5499] hover:text-[#7AC6E4] font-semibold ml-1">
                        Login di sini
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
