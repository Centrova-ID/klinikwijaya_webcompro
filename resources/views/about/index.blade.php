@extends('layout.main')

@section('title', 'Tentang Kami - Klinik Wijaya')

@section('content')
{{-- Hero Section --}}
<section class="relative aspect-video lg:aspect-[16/5] bg-gray-900">
    <div class="absolute inset-0 bg-[url('/assts/img/0/rdm/rdm-about.webp')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-slate-100/80"></div>
    <div class="relative h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex justify-center items-center">
            <div class="text-gray-800 max-w-3xl text-center">
                <h1 class="text-5xl md:text-6xl font-bold mt-24">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>

{{-- Introduction Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
            <p class="text-gray-700 leading-relaxed text-xl">
                Klinik Wijaya adalah klinik terpercaya untuk rehabilitasi pasca stroke di Jakarta. Terletak di kawasan strategis Wijaya, Jakarta Selatan. Kami menyediakan program rehabilitasi yang mendukung kemandirian tiap pasien untuk meningkatkan kualitas hidup mereka setelah stroke.
            </p>
        </div>
    </div>
</section>

{{-- Alasan Memilih Kami Section --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-once="true">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Alasan Mengapa Anda Memilih Kami?</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- 1. VISI & MISI --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi & Misi</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya memiliki visi menjadi Klinik Rehabilitasi Medik dengan teknologi yang terdepan. Dengan misi menyediakan teknologi robotik untuk mendukung proses rehabilitasi lebih efektif dan menyenangkan.
                </p>
            </div>

            {{-- 2. TERPERCAYA --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Terpercaya</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya didirikan sejak tahun 2000, sehingga kami telah memiliki kurang lebih 19 tahun pengalaman dan menjadi klinik rehabilitasi yang dapat dipercaya.
                </p>
            </div>

            {{-- 3. MENGUTAMAKAN KEMANDIRIAN --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mengutamakan Kemandirian</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami memahami, bahwa pasien pasca stroke tidak hanya membutuhkan pemulihan tetapi juga mendapatkan kembali kemandirian, oleh karena itu kami telah memiliki program rehabilitasi untuk mengembalikan kemandirian.
                </p>
            </div>

            {{-- 4. PELAYANAN TERBAIK --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Pelayanan Terbaik</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami selalu menjaga kualitas pelayanan untuk dapat melayani Anda dengan baik. Semua anggota Klinik Wijaya selalu mendapatkan update ilmu terbaru di bidangnya. Klinik Wijaya merupakan Klinik yang cocok untuk Anda dan keluarga.
                </p>
            </div>

            {{-- 5. MEMBERIKAN DUKUNGAN PENUH --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Memberikan Dukungan Penuh</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami memiliki dedikasi yang cukup tinggi untuk menjadikan pasien kami sebagian bagian dari keluarga Klinik Wijaya dengan selalu memberikan dukungan , harapan dan motivasi untuk mendapatkan peluang terbaik untuk pemulihan.
                </p>
            </div>

            {{-- 6. LOKASI STRATEGIS --}}
            <div class="bg-white border border-gray-200 p-8 rounded-xl">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Lokasi Strategis</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Klinik Wijaya berlokasi di Jl Wijaya II No 26, Melawai, Kebayoran Baru, Jakarta Selatan menjadi kawasan yang dapat dengan mudah dijangkau.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Statistics Section --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12">
            {{-- Counter 1 --}}
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-5xl font-semibold text-[#3F5499] mb-2"><span class="counter" data-target="15">0</span>Tahun</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Melayani</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Lebih dari 15 tahun kami menjadi mitra kesehatan Anda dan keluarga
                </p>
            </div>

            {{-- Counter 2 --}}
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-5xl font-semibold text-[#3F5499] mb-2 counter" data-target="1000">0</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Pasien Puas</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kesehatan dan kenyamanan Anda dan keluarga adalah prioritas dari pelayanan kami
                </p>
            </div>

            {{-- Counter 3 --}}
            <div class="text-center">
                <div class="mb-6">
                    <div class="text-5xl font-semibold text-[#3F5499] mb-2 counter" data-target="10">0</div>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Setiap Hari</div>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Kami bangga bisa melayani kesehatan Anda dan keluarga setiap saat.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Tim Dokter Section --}}
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tim Dokter Spesialis Kami</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Didukung oleh dokter spesialis berpengalaman di bidang rehabilitasi medis
            </p>
        </div>

        {{-- Grid Dokter (Responsive) --}}
        <div class="grid grid-cols-3 gap-6 md:gap-12" data-aos="zoom-in" data-aos-delay="200" data-aos-once="true">
            @for($i = 1; $i <= 9; $i++)
            <div class="group relative">
                <div class="rounded-lg lg:rounded-2xl overflow-hidden bg-gradient-to-b from-neutral-100 to-transparent aspect-square">
                    <div class="w-full h-full flex items-center justify-center">
                        <img 
                            src="{{ asset("assts/img/doctors/doctor ($i).png") }}" 
                            alt="Dokter Spesialis Klinik Wijaya" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                            onerror="this.src='{{ asset('assts/img/placeholder-doctor.jpg') }}'"
                        >
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const runCounter = (element) => {
        const target = +element.getAttribute('data-target');
        const increment = target / speed;

        const updateCount = () => {
            const count = +element.innerText;
            if (count < target) {
                element.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                element.innerText = target + '+';
            }
        };

        updateCount();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                runCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => observer.observe(counter));
});
</script>
@endpush