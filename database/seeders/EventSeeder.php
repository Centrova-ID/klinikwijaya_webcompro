<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        
        $events = [
            [
                'title' => 'Seminar Kesehatan: Pencegahan Stroke di Usia Produktif',
                'description' => 'Seminar gratis tentang pencegahan stroke dengan narasumber dokter spesialis saraf',
                'content' => '<h2>Tentang Seminar</h2>
                    <p>Stroke bukan lagi penyakit lansia. Semakin banyak kasus stroke terjadi pada usia produktif. Dalam seminar ini, kami akan membahas:</p>
                    
                    <h3>Materi yang Akan Dibahas</h3>
                    <ul>
                        <li>Faktor risiko stroke di usia muda</li>
                        <li>Gaya hidup sehat untuk mencegah stroke</li>
                        <li>Mengenali tanda-tanda awal stroke</li>
                        <li>Tindakan pertama saat menemukan kasus stroke</li>
                        <li>Program rehabilitasi pasca stroke</li>
                    </ul>
                    
                    <h3>Narasumber</h3>
                    <p><strong>dr. Sarah Wijaya, Sp.S</strong><br>
                    Dokter Spesialis Saraf dengan pengalaman lebih dari 15 tahun dalam penanganan stroke</p>
                    
                    <h3>Fasilitas</h3>
                    <ul>
                        <li>Sertifikat peserta</li>
                        <li>Konsultasi gratis dengan dokter</li>
                        <li>Materi seminar digital</li>
                        <li>Snack dan coffee break</li>
                        <li>Door prize menarik</li>
                    </ul>
                    
                    <p><strong>Kapasitas terbatas!</strong> Daftarkan diri Anda sekarang juga.</p>',
                'event_date' => Carbon::now()->addDays(15)->setTime(14, 0, 0),
                'location' => 'Auditorium Klinik Wijaya',
            ],
            [
                'title' => 'Workshop Terapi Robotik untuk Tenaga Medis',
                'description' => 'Pelatihan penggunaan teknologi terapi robotik untuk rehabilitasi pasien',
                'content' => '<h2>Tentang Workshop</h2>
                    <p>Workshop ini dirancang khusus untuk tenaga medis yang ingin mempelajari penggunaan teknologi terapi robotik dalam rehabilitasi medis.</p>
                    
                    <h3>Tujuan Workshop</h3>
                    <ol>
                        <li>Memahami prinsip dasar terapi robotik</li>
                        <li>Mengenal berbagai jenis alat terapi robotik</li>
                        <li>Praktik langsung penggunaan peralatan</li>
                        <li>Menyusun program terapi yang efektif</li>
                        <li>Evaluasi hasil terapi</li>
                    </ol>
                    
                    <h3>Target Peserta</h3>
                    <ul>
                        <li>Fisioterapis</li>
                        <li>Okupasi terapis</li>
                        <li>Dokter rehabilitasi medis</li>
                        <li>Perawat rehabilitasi</li>
                    </ul>
                    
                    <h3>Instruktur</h3>
                    <p>Tim ahli dari Klinik Wijaya yang berpengalaman dalam terapi robotik</p>
                    
                    <h3>Investasi</h3>
                    <p>Rp 2.500.000 (termasuk sertifikat, materi, dan lunch)</p>
                    
                    <p><strong>Early bird discount 20% untuk pendaftaran sebelum 1 Januari 2026!</strong></p>',
                'event_date' => Carbon::now()->addDays(25)->setTime(9, 0, 0),
                'location' => 'Ruang Training Klinik Wijaya',
            ],
            [
                'title' => 'Pemeriksaan Gigi Gratis untuk Anak-anak',
                'description' => 'Program pemeriksaan gigi gratis untuk anak usia 5-12 tahun',
                'content' => '<h2>Program Kesehatan Gigi Anak</h2>
                    <p>Klinik Wijaya peduli dengan kesehatan gigi anak-anak Indonesia. Kami mengadakan program pemeriksaan gigi gratis untuk anak usia 5-12 tahun.</p>
                    
                    <h3>Layanan yang Diberikan</h3>
                    <ul>
                        <li>Pemeriksaan gigi menyeluruh</li>
                        <li>Konsultasi kesehatan gigi</li>
                        <li>Edukasi cara sikat gigi yang benar</li>
                        <li>Fluoride treatment gratis</li>
                        <li>Hadiah menarik untuk anak</li>
                    </ul>
                    
                    <h3>Syarat dan Ketentuan</h3>
                    <ol>
                        <li>Anak usia 5-12 tahun</li>
                        <li>Didampingi orang tua/wali</li>
                        <li>Mendaftar terlebih dahulu (kuota terbatas)</li>
                        <li>Membawa kartu identitas anak</li>
                    </ol>
                    
                    <h3>Jadwal Pelaksanaan</h3>
                    <p>Sabtu, 11 Januari 2026<br>
                    Pukul 09.00 - 14.00 WIB</p>
                    
                    <h3>Benefit Tambahan</h3>
                    <ul>
                        <li>Diskon 50% untuk perawatan lanjutan</li>
                        <li>Free dental kit untuk anak</li>
                        <li>Games dan hiburan edukatif</li>
                    </ul>
                    
                    <p><strong>Kuota terbatas hanya 50 anak!</strong> Segera daftarkan putra-putri Anda.</p>',
                'event_date' => Carbon::now()->addDays(20)->setTime(9, 0, 0),
                'location' => 'Klinik Gigi Wijaya',
            ],
            [
                'title' => 'Senam Osteoporosis dan Edukasi Kesehatan Tulang',
                'description' => 'Program senam khusus dan edukasi untuk mencegah osteoporosis',
                'content' => '<h2>Senam Osteoporosis</h2>
                    <p>Osteoporosis adalah kondisi pengeroposan tulang yang umum terjadi terutama pada wanita menopause. Mari jaga kesehatan tulang Anda dengan mengikuti program senam khusus osteoporosis.</p>
                    
                    <h3>Manfaat Senam Osteoporosis</h3>
                    <ul>
                        <li>Meningkatkan kepadatan tulang</li>
                        <li>Meningkatkan kekuatan otot</li>
                        <li>Meningkatkan keseimbangan</li>
                        <li>Mengurangi risiko jatuh</li>
                        <li>Meningkatkan fleksibilitas</li>
                    </ul>
                    
                    <h3>Rangkaian Acara</h3>
                    <p><strong>09.00 - 09.30:</strong> Registrasi peserta<br>
                    <strong>09.30 - 10.00:</strong> Pemeriksaan tekanan darah dan gula darah gratis<br>
                    <strong>10.00 - 11.00:</strong> Edukasi kesehatan tulang oleh dokter spesialis<br>
                    <strong>11.00 - 12.00:</strong> Senam osteoporosis dipandu instruktur bersertifikat<br>
                    <strong>12.00 - 13.00:</strong> Lunch dan door prize</p>
                    
                    <h3>Target Peserta</h3>
                    <ul>
                        <li>Wanita menopause dan pra-menopause</li>
                        <li>Pria usia 50 tahun ke atas</li>
                        <li>Penderita osteopenia/osteoporosis</li>
                        <li>Siapa saja yang peduli kesehatan tulang</li>
                    </ul>
                    
                    <h3>Fasilitas</h3>
                    <ul>
                        <li>Pemeriksaan kesehatan gratis</li>
                        <li>Lunch box</li>
                        <li>Goodie bag</li>
                        <li>Sertifikat peserta</li>
                        <li>Video tutorial senam</li>
                    </ul>
                    
                    <p><strong>Gratis! Daftar sekarang juga.</strong></p>',
                'event_date' => Carbon::now()->addDays(10)->setTime(9, 0, 0),
                'location' => 'Halaman Klinik Wijaya',
            ],
            [
                'title' => 'Medical Check-Up Hemat: Promo Akhir Tahun',
                'description' => 'Paket medical check-up lengkap dengan harga spesial akhir tahun',
                'content' => '<h2>Promo Medical Check-Up Akhir Tahun</h2>
                    <p>Tutup tahun dengan kondisi tubuh yang prima! Dapatkan paket medical check-up lengkap dengan diskon hingga 40%.</p>
                    
                    <h3>Paket Basic (Rp 500.000)</h3>
                    <ul>
                        <li>Pemeriksaan fisik lengkap</li>
                        <li>Tekanan darah</li>
                        <li>Gula darah puasa</li>
                        <li>Kolesterol total</li>
                        <li>Asam urat</li>
                        <li>Urinalisis</li>
                        <li>Rontgen thorax</li>
                    </ul>
                    
                    <h3>Paket Premium (Rp 1.200.000)</h3>
                    <p>Semua pemeriksaan Paket Basic, plus:</p>
                    <ul>
                        <li>Profil lipid lengkap</li>
                        <li>Fungsi hati (SGOT, SGPT)</li>
                        <li>Fungsi ginjal (Ureum, Kreatinin)</li>
                        <li>HbA1c</li>
                        <li>EKG</li>
                        <li>USG abdomen</li>
                        <li>Konsultasi dokter spesialis</li>
                    </ul>
                    
                    <h3>Paket Executive (Rp 2.500.000)</h3>
                    <p>Semua pemeriksaan Paket Premium, plus:</p>
                    <ul>
                        <li>Treadmill test</li>
                        <li>Echocardiography</li>
                        <li>Tumor marker</li>
                        <li>Thyroid function test</li>
                        <li>Bone densitometry</li>
                        <li>Konsultasi multiple specialist</li>
                    </ul>
                    
                    <h3>Bonus Khusus</h3>
                    <ul>
                        <li>Gratis konsultasi gizi</li>
                        <li>Free vitamin 1 bulan</li>
                        <li>Hasil digital via email</li>
                        <li>Kartu member Klinik Wijaya</li>
                    </ul>
                    
                    <h3>Periode Promo</h3>
                    <p>1 Januari - 31 Januari 2026</p>
                    
                    <p><strong>Booking sekarang! Slot terbatas.</strong></p>',
                'event_date' => Carbon::now()->addDays(10)->setTime(8, 0, 0),
                'location' => 'Klinik Wijaya',
            ],
            [
                'title' => 'Kelas Edukasi Diabetes: Hidup Sehat dengan Diabetes',
                'description' => 'Kelas edukasi untuk penderita diabetes dan keluarga tentang manajemen diabetes',
                'content' => '<h2>Kelas Edukasi Diabetes</h2>
                    <p>Hidup dengan diabetes bukan berarti hidup tanpa kualitas. Pelajari cara mengelola diabetes dengan baik untuk hidup yang lebih sehat dan bahagia.</p>
                    
                    <h3>Materi yang Akan Dipelajari</h3>
                    
                    <h4>Sesi 1: Memahami Diabetes</h4>
                    <ul>
                        <li>Apa itu diabetes?</li>
                        <li>Jenis-jenis diabetes</li>
                        <li>Penyebab dan faktor risiko</li>
                        <li>Komplikasi diabetes</li>
                    </ul>
                    
                    <h4>Sesi 2: Pola Makan Diabetes</h4>
                    <ul>
                        <li>Prinsip diet diabetes</li>
                        <li>Menghitung karbohidrat</li>
                        <li>Makanan yang dianjurkan dan dihindari</li>
                        <li>Meal planning praktis</li>
                        <li>Demo memasak menu diabetes</li>
                    </ul>
                    
                    <h4>Sesi 3: Olahraga dan Aktivitas Fisik</h4>
                    <ul>
                        <li>Manfaat olahraga untuk diabetesi</li>
                        <li>Jenis olahraga yang tepat</li>
                        <li>Intensitas dan durasi olahraga</li>
                        <li>Praktik senam diabetes</li>
                    </ul>
                    
                    <h4>Sesi 4: Monitoring dan Obat-obatan</h4>
                    <ul>
                        <li>Cara mengukur gula darah</li>
                        <li>Target gula darah</li>
                        <li>Jenis-jenis obat diabetes</li>
                        <li>Teknik menyuntik insulin</li>
                    </ul>
                    
                    <h4>Sesi 5: Pencegahan Komplikasi</h4>
                    <ul>
                        <li>Perawatan kaki diabetes</li>
                        <li>Menjaga kesehatan mata</li>
                        <li>Menjaga kesehatan ginjal</li>
                        <li>Mengelola stres</li>
                    </ul>
                    
                    <h3>Narasumber</h3>
                    <ul>
                        <li>dr. Made Putra, Sp.PD - Dokter Spesialis Penyakit Dalam</li>
                        <li>Ani Susanti, S.Gz - Ahli Gizi Klinik</li>
                        <li>Budi Santoso, S.Ft - Fisioterapis</li>
                    </ul>
                    
                    <h3>Jadwal</h3>
                    <p>Setiap Sabtu, 4 kali pertemuan<br>
                    Pukul 10.00 - 12.00 WIB<br>
                    Dimulai 18 Januari 2026</p>
                    
                    <h3>Investasi</h3>
                    <p>Rp 500.000 (untuk 4 kali pertemuan)<br>
                    Termasuk: materi lengkap, snack, demo masak, dan alat cek gula darah</p>
                    
                    <p><strong>Early bird: Rp 400.000 untuk pendaftaran sebelum 10 Januari!</strong></p>',
                'event_date' => Carbon::now()->addDays(27)->setTime(10, 0, 0),
                'location' => 'Ruang Seminar Klinik Wijaya',
            ],
        ];
        
        foreach ($events as $eventData) {
            Event::create([
                'title' => $eventData['title'],
                'slug' => Str::slug($eventData['title']),
                'description' => $eventData['description'],
                'content' => $eventData['content'],
                'event_date' => $eventData['event_date'],
                'location' => $eventData['location'],
                'user_id' => $user->id,
                'status' => 'published',
            ]);
        }
    }
}
