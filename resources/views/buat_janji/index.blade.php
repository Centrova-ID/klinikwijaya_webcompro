@extends('layout.main')

@section('title', 'Buat Janji Kunjungan - Klinik Wijaya')

@push('styles')
{{-- Font Awesome for icons --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush

@section('content')
{{-- Hero Section --}}
<div class="relative bg-gradient-to-r from-[#3F5499] to-[#7AC6E4] text-white py-20">
    <div class="absolute inset-0 overflow-hidden">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">BUAT JANJI KUNJUNGAN</h1>
            <p class="text-xl text-gray-100">Silakan mengisi formulir di bawah ini untuk membuat janji dengan dokter kami</p>
        </div>
    </div>
</div>

{{-- Form Section --}}
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Form Column (2/3) --}}
                <div class="md:col-span-2" data-aos="fade-right" data-aos-duration="1000">
                    <div class="bg-white rounded shadow p-8">
                        <h2 class="text-2xl font-bold text-[#3F5499] mb-6">Buat Janji Kunjungan Sekarang</h2>
                        
                        <form id="appointmentForm" class="space-y-6">
                            {{-- Nama --}}
                            <div>
                                <label for="nama" class="block text-gray-700 font-semibold mb-2">
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nama" name="nama" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent"
                                    placeholder="Masukkan nama lengkap Anda">
                            </div>

                            {{-- Nomor Telepon --}}
                            <div>
                                <label for="telepon" class="block text-gray-700 font-semibold mb-2">
                                    Nomor Telp/Handphone <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="telepon" name="telepon" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent"
                                    placeholder="Contoh: 08123456789">
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent"
                                    placeholder="nama@email.com">
                            </div>

                            {{-- Dokter --}}
                            <div>
                                <label for="dokter" class="block text-gray-700 font-semibold mb-2">
                                    Dokter Yang Ingin Ditemui <span class="text-red-500">*</span>
                                </label>
                                <select id="dokter" name="dokter" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
                                    <option value="">-- Pilih Dokter --</option>
                                    <option value="dr. Rosiana Pradanasari Wirawan, Sp.KFR (K)">dr. Rosiana Pradanasari Wirawan, Sp.KFR (K) – Stroke, Spinal Cord Injury & Neurogenik Bladder</option>
                                    <option value="dr Erik Setiawan, Sp.KFR">dr Erik Setiawan, Sp.KFR – Musculosceletal Rehabilitation</option>
                                    <option value="dr Kaleb Tjindarbumi, Sp.KFR">dr Kaleb Tjindarbumi, Sp.KFR – Physiatrist</option>
                                    <option value="dr. Sukono Djojoatmojo, Sp.S">dr. Sukono Djojoatmojo, Sp.S – Spesialis Saraf</option>
                                    <option value="dr. Sharon Loraine Samuel, Sp.KFR">dr. Sharon Loraine Samuel, Sp.KFR – Physiatrist</option>
                                    <option value="dr. Fitri Anestherita, Sp.KFR">dr. Fitri Anestherita, Sp.KFR – Physiatrist</option>
                                    <option value="dr. Liaw Roger Leo, MD, FRACS">dr. Liaw Roger Leo, MD, FRACS – Physiatrist</option>
                                    <option value="dr. Troydimas Panjaitan, Sp.OT">dr. Troydimas Panjaitan, Sp.OT – Physiatrist</option>
                                    <option value="dr. Ade Wijaya, Sp.S">dr. Ade Wijaya, Sp.S – Physiatrist</option>
                                    <option value="drg. Rosalinda Rambe, SP.KG">drg. Rosalinda Rambe, SP.KG – Spesialis Konservasi Gigi (Saraf Gigi)</option>
                                    <option value="drg. Fifi Prihasti. Sp.Perio">drg. Fifi Prihasti. Sp.Perio – Spesialis Periodontis</option>
                                    <option value="drg. JM Hendrati Tjipto B Sp.Ort">drg. JM Hendrati Tjipto B Sp.Ort</option>
                                    <option value="drg. Dewi Haryanti Pramono S.Pros">drg. Dewi Haryanti Pramono S.Pros</option>
                                    <option value="drg. Rinati Adrin Sp.KGA">drg. Rinati Adrin Sp.KGA</option>
                                </select>
                            </div>

                            {{-- Tanggal Kunjungan --}}
                            <div>
                                <label for="tanggal" class="block text-gray-700 font-semibold mb-2">
                                    Tanggal Kunjungan <span class="text-red-500">*</span>
                                </label>
                                <input type="date" id="tanggal" name="tanggal" required
                                    min="{{ date('Y-m-d') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent">
                            </div>

                            {{-- Keterangan --}}
                            <div>
                                <label for="keterangan" class="block text-gray-700 font-semibold mb-2">
                                    Keterangan
                                </label>
                                <textarea id="keterangan" name="keterangan" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#3F5499] focus:border-transparent"
                                    placeholder="Tulis keluhan atau keterangan tambahan (opsional)"></textarea>
                            </div>

                            {{-- Submit Button --}}
                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full px-6 py-4 bg-[#3F5499] hover:bg-[#7AC6E4] text-white font-bold text-lg rounded transition">
                                    <i class="fab fa-whatsapp mr-2"></i> Kirim via WhatsApp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Contact Info Column (1/3) --}}
                <div class="md:col-span-1" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    {{-- Chat dengan CS --}}
                    <div class="bg-white rounded shadow p-6 mb-6">
                        <h3 class="text-xl font-bold text-[#3F5499] mb-4">Chatting dengan CS</h3>
                        <a href="https://wa.me/6281888757571" target="_blank"
                            class="flex items-center justify-center space-x-2 px-6 py-3 bg-green-500 text-white rounded hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp text-2xl"></i>
                            <span class="font-semibold">081-888-7571</span>
                        </a>
                    </div>

                    {{-- Lokasi --}}
                    <div class="bg-white rounded shadow p-6">
                        <h3 class="text-xl font-bold text-[#3F5499] mb-4">Informasi Kontak</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 aspect-square flex justify-center items-center">
                                    <i class="fas fa-map-marker-alt text-[#7AC6E4] text-xl mt-1"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-700">LOKASI</p>
                                    <p class="text-gray-600 text-sm">JL Wijaya 2 No.26<br>Kebayoran Baru<br>Jakarta Selatan</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-8 aspect-square flex justify-center items-center">
                                    <i class="fas fa-phone text-[#7AC6E4] text-xl mt-1"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-700">TELEPON</p>
                                    <p class="text-gray-600 text-sm">(021) 722 1251</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-8 aspect-square flex justify-center items-center">
                                    <i class="fas fa-clock text-[#7AC6E4] text-xl mt-1"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-700">JAM OPERASIONAL</p>
                                    <p class="text-gray-600 text-sm">Senin - Jumat: 08:00 - 20:00<br>Sabtu: 08:00 - 17:00<br>Minggu: Tutup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- WhatsApp Form Handler Script --}}
<script>
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const nama = document.getElementById('nama').value;
        const telepon = document.getElementById('telepon').value;
        const email = document.getElementById('email').value;
        const dokter = document.getElementById('dokter').value;
        const tanggal = document.getElementById('tanggal').value;
        const keterangan = document.getElementById('keterangan').value;
        
        // Format tanggal
        const tanggalObj = new Date(tanggal);
        const tanggalFormatted = tanggalObj.toLocaleDateString('id-ID', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        });
        
        // Create WhatsApp message
        let message = `*BUAT JANJI KUNJUNGAN*\n\n`;
        message += `Nama: ${nama}\n`;
        message += `No. Telepon: ${telepon}\n`;
        message += `Email: ${email}\n`;
        message += `Dokter: ${dokter}\n`;
        message += `Tanggal Kunjungan: ${tanggalFormatted}\n`;
        
        if(keterangan) {
            message += `\nKeterangan:\n${keterangan}`;
        }
        
        // WhatsApp number (format: 62xxxxxxxxxx)
        const waNumber = '628118062262';
        
        // Encode message for URL
        const encodedMessage = encodeURIComponent(message);
        
        // Create WhatsApp URL
        const waUrl = `https://wa.me/${waNumber}?text=${encodedMessage}`;
        
        // Open WhatsApp
        window.open(waUrl, '_blank');
    });
</script>
@endsection
