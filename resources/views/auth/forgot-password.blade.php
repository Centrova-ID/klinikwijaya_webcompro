@extends('layout.main')

@section('title', 'Lupa Password - Klinik Wijaya')

@section('content')
<!-- Hero Section -->
<section class="relative h-[400px] bg-gray-900">
    <div class="absolute inset-0 bg-gradient-to-r from-[#3F5499]/90 to-[#7AC6E4]/70"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-white max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Lupa Password</h1>
                <p class="text-xl md:text-2xl text-white/90">Reset Password Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Forgot Password Form Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-4 text-sm text-gray-600">
                Lupa password Anda? Tidak masalah. Masukkan alamat email Anda dan kami akan mengirimkan link reset password.
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        Email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3F5499] @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="w-full px-6 py-2 bg-[#3F5499] text-white rounded-lg hover:bg-[#7AC6E4] transition-colors duration-300">
                        Kirim Link Reset Password
                    </button>
                </div>

                <div class="text-center mt-6">
                    <a href="{{ route('login') }}" class="text-sm text-[#3F5499] hover:text-[#7AC6E4]">
                        ← Kembali ke Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
