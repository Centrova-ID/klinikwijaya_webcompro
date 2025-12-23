<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        
        $articles = [
            [
                'title' => 'Pentingnya Rehabilitasi Stroke untuk Pemulihan Optimal',
                'category' => 'Rehabilitasi',
                'excerpt' => 'Rehabilitasi stroke adalah kunci utama untuk membantu pasien mendapatkan kembali kemampuan yang hilang dan meningkatkan kualitas hidup mereka.',
                'content' => '<h2>Apa itu Rehabilitasi Stroke?</h2>
                    <p>Rehabilitasi stroke adalah program terapi yang dirancang khusus untuk membantu pasien stroke mendapatkan kembali kemampuan fisik, kognitif, dan emosional yang mungkin terpengaruh akibat stroke.</p>
                    
                    <h3>Manfaat Rehabilitasi Stroke</h3>
                    <ul>
                        <li>Meningkatkan kekuatan otot dan koordinasi</li>
                        <li>Membantu pemulihan kemampuan berbicara</li>
                        <li>Melatih kembali kemampuan berjalan dan keseimbangan</li>
                        <li>Meningkatkan kemandirian dalam aktivitas sehari-hari</li>
                    </ul>
                    
                    <h3>Program Rehabilitasi di Klinik Wijaya</h3>
                    <p>Klinik Wijaya menyediakan program rehabilitasi stroke yang komprehensif dengan didukung oleh terapis berpengalaman dan peralatan modern. Program kami meliputi:</p>
                    <ol>
                        <li>Fisioterapi untuk pemulihan kemampuan motorik</li>
                        <li>Terapi okupasi untuk melatih aktivitas sehari-hari</li>
                        <li>Terapi wicara untuk gangguan komunikasi</li>
                        <li>Terapi robotik untuk hasil lebih optimal</li>
                    </ol>
                    
                    <p>Konsultasikan kondisi Anda dengan tim medis kami untuk mendapatkan program rehabilitasi yang sesuai dengan kebutuhan Anda.</p>',
            ],
            [
                'title' => 'Terapi Robotik: Inovasi Terkini dalam Rehabilitasi Medis',
                'category' => 'Rehabilitasi',
                'excerpt' => 'Teknologi terapi robotik membawa revolusi dalam dunia rehabilitasi medis dengan hasil yang lebih cepat dan efektif.',
                'content' => '<h2>Mengenal Terapi Robotik</h2>
                    <p>Terapi robotik adalah metode rehabilitasi yang menggunakan perangkat robotik canggih untuk membantu pasien dalam proses pemulihan. Teknologi ini terbukti sangat efektif dalam rehabilitasi pasca stroke, cedera tulang belakang, dan berbagai kondisi neurologis lainnya.</p>
                    
                    <h3>Keunggulan Terapi Robotik</h3>
                    <ul>
                        <li>Gerakan yang presisi dan terukur</li>
                        <li>Intensitas latihan yang dapat disesuaikan</li>
                        <li>Hasil terapi yang lebih cepat</li>
                        <li>Motivasi pasien yang lebih tinggi dengan feedback real-time</li>
                        <li>Mengurangi beban kerja terapis</li>
                    </ul>
                    
                    <h3>Jenis-jenis Terapi Robotik</h3>
                    <p><strong>1. Robot untuk Ekstremitas Atas</strong><br>
                    Membantu pemulihan fungsi tangan dan lengan dengan gerakan yang terkontrol.</p>
                    
                    <p><strong>2. Robot untuk Ekstremitas Bawah</strong><br>
                    Membantu latihan berjalan dengan dukungan dan panduan yang tepat.</p>
                    
                    <p><strong>3. Exoskeleton</strong><br>
                    Alat bantu yang dapat dikenakan untuk membantu mobilitas pasien.</p>
                    
                    <p>Klinik Wijaya adalah salah satu klinik terdepan di Indonesia yang menyediakan layanan terapi robotik dengan peralatan tercanggih.</p>',
            ],
            [
                'title' => '7 Tips Menjaga Kesehatan Gigi dan Mulut',
                'category' => 'Kesehatan Gigi',
                'excerpt' => 'Kesehatan gigi dan mulut adalah bagian penting dari kesehatan tubuh secara keseluruhan. Berikut tips praktis untuk menjaganya.',
                'content' => '<h2>Pentingnya Kesehatan Gigi dan Mulut</h2>
                    <p>Kesehatan gigi dan mulut tidak hanya mempengaruhi penampilan, tetapi juga kesehatan tubuh secara keseluruhan. Masalah gigi dapat menyebabkan infeksi yang menyebar ke organ lain.</p>
                    
                    <h3>7 Tips Menjaga Kesehatan Gigi</h3>
                    
                    <h4>1. Sikat Gigi 2 Kali Sehari</h4>
                    <p>Sikat gigi secara teratur setelah sarapan dan sebelum tidur. Gunakan pasta gigi yang mengandung fluoride.</p>
                    
                    <h4>2. Gunakan Teknik Menyikat yang Benar</h4>
                    <p>Sikat dengan gerakan memutar dan lembut. Jangan lupa membersihkan lidah untuk menghilangkan bakteri.</p>
                    
                    <h4>3. Gunakan Benang Gigi</h4>
                    <p>Benang gigi membantu membersihkan sela-sela gigi yang sulit dijangkau sikat gigi.</p>
                    
                    <h4>4. Berkumur dengan Mouthwash</h4>
                    <p>Mouthwash antibakteri membantu mengurangi plak dan bakteri di mulut.</p>
                    
                    <h4>5. Batasi Konsumsi Gula</h4>
                    <p>Makanan dan minuman manis dapat menyebabkan kerusakan gigi. Batasi konsumsinya.</p>
                    
                    <h4>6. Minum Air Putih yang Cukup</h4>
                    <p>Air putih membantu membersihkan sisa makanan dan menjaga produksi air liur.</p>
                    
                    <h4>7. Rutin Periksa ke Dokter Gigi</h4>
                    <p>Lakukan pemeriksaan gigi minimal 6 bulan sekali untuk deteksi dini masalah gigi.</p>
                    
                    <p>Klinik Wijaya menyediakan layanan kesehatan gigi lengkap dengan dokter spesialis gigi berpengalaman.</p>',
            ],
            [
                'title' => 'Mengenal Cedera Muskuloskeletal dan Cara Pencegahannya',
                'category' => 'Orthopedi',
                'excerpt' => 'Cedera muskuloskeletal adalah masalah umum yang mempengaruhi otot, tulang, dan sendi. Ketahui cara mencegahnya.',
                'content' => '<h2>Apa itu Cedera Muskuloskeletal?</h2>
                    <p>Cedera muskuloskeletal adalah cedera atau gangguan yang mempengaruhi sistem muskuloskeletal tubuh, termasuk otot, tendon, ligamen, saraf, dan struktur pendukung lainnya.</p>
                    
                    <h3>Jenis-jenis Cedera Muskuloskeletal</h3>
                    <ul>
                        <li><strong>Strain:</strong> Cedera pada otot atau tendon</li>
                        <li><strong>Sprain:</strong> Cedera pada ligamen</li>
                        <li><strong>Tendinitis:</strong> Peradangan pada tendon</li>
                        <li><strong>Bursitis:</strong> Peradangan pada bursa (kantong cairan)</li>
                        <li><strong>Fraktur Stres:</strong> Retakan kecil pada tulang</li>
                    </ul>
                    
                    <h3>Penyebab Umum</h3>
                    <ol>
                        <li>Aktivitas fisik berlebihan</li>
                        <li>Gerakan berulang</li>
                        <li>Postur tubuh yang buruk</li>
                        <li>Kurang pemanasan sebelum olahraga</li>
                        <li>Trauma atau benturan</li>
                    </ol>
                    
                    <h3>Cara Pencegahan</h3>
                    <p><strong>Pemanasan dan Pendinginan</strong><br>
                    Selalu lakukan pemanasan sebelum dan pendinginan setelah aktivitas fisik.</p>
                    
                    <p><strong>Latihan Kekuatan</strong><br>
                    Perkuat otot-otot pendukung untuk melindungi sendi.</p>
                    
                    <p><strong>Ergonomi yang Baik</strong><br>
                    Pastikan posisi kerja dan aktivitas sehari-hari ergonomis.</p>
                    
                    <p><strong>Istirahat yang Cukup</strong><br>
                    Berikan waktu tubuh untuk pemulihan antara aktivitas intens.</p>
                    
                    <h3>Pengobatan di Klinik Wijaya</h3>
                    <p>Klinik Wijaya menyediakan layanan komprehensif untuk penanganan cedera muskuloskeletal dengan pendekatan holistik dan teknologi terkini.</p>',
            ],
            [
                'title' => 'Panduan Lengkap Pola Hidup Sehat untuk Cegah Penyakit',
                'category' => 'Tips Kesehatan',
                'excerpt' => 'Menjalani pola hidup sehat adalah investasi terbaik untuk masa depan. Simak panduan lengkapnya di sini.',
                'content' => '<h2>Mengapa Pola Hidup Sehat Penting?</h2>
                    <p>Pola hidup sehat dapat mencegah berbagai penyakit kronis seperti diabetes, hipertensi, penyakit jantung, dan kanker. Selain itu, pola hidup sehat juga meningkatkan kualitas hidup dan produktivitas.</p>
                    
                    <h3>Pilar Utama Pola Hidup Sehat</h3>
                    
                    <h4>1. Nutrisi Seimbang</h4>
                    <ul>
                        <li>Konsumsi sayur dan buah minimal 5 porsi per hari</li>
                        <li>Pilih karbohidrat kompleks seperti nasi merah dan gandum</li>
                        <li>Protein berkualitas dari ikan, ayam, dan kacang-kacangan</li>
                        <li>Batasi gula, garam, dan lemak jenuh</li>
                    </ul>
                    
                    <h4>2. Aktivitas Fisik Teratur</h4>
                    <ul>
                        <li>Olahraga minimal 150 menit per minggu</li>
                        <li>Kombinasi kardio dan latihan kekuatan</li>
                        <li>Jalan kaki minimal 10.000 langkah per hari</li>
                        <li>Hindari duduk terlalu lama</li>
                    </ul>
                    
                    <h4>3. Tidur Berkualitas</h4>
                    <ul>
                        <li>Tidur 7-9 jam per malam</li>
                        <li>Jaga konsistensi jadwal tidur</li>
                        <li>Ciptakan lingkungan tidur yang nyaman</li>
                        <li>Hindari gadget 1 jam sebelum tidur</li>
                    </ul>
                    
                    <h4>4. Manajemen Stres</h4>
                    <ul>
                        <li>Praktikkan meditasi atau yoga</li>
                        <li>Luangkan waktu untuk hobi</li>
                        <li>Jaga hubungan sosial yang positif</li>
                        <li>Konsultasi dengan profesional jika perlu</li>
                    </ul>
                    
                    <h4>5. Pemeriksaan Kesehatan Rutin</h4>
                    <p>Lakukan medical check-up rutin untuk deteksi dini masalah kesehatan. Klinik Wijaya menyediakan paket medical check-up lengkap dengan harga terjangkau.</p>
                    
                    <h3>Kesimpulan</h3>
                    <p>Pola hidup sehat adalah pilihan yang perlu dijaga konsistensinya. Mulailah dari hal-hal kecil dan tingkatkan secara bertahap untuk hasil yang berkelanjutan.</p>',
            ],
            [
                'title' => 'Fisioterapi: Solusi Efektif untuk Nyeri Kronis',
                'category' => 'Layanan Medis',
                'excerpt' => 'Nyeri kronis dapat mengganggu aktivitas sehari-hari. Fisioterapi menawarkan solusi efektif tanpa obat-obatan.',
                'content' => '<h2>Apa itu Fisioterapi?</h2>
                    <p>Fisioterapi adalah metode pengobatan yang menggunakan pendekatan fisik untuk mengatasi gangguan gerak dan fungsi tubuh. Fisioterapi sangat efektif untuk mengatasi nyeri kronis tanpa ketergantungan pada obat-obatan.</p>
                    
                    <h3>Kondisi yang Dapat Diatasi dengan Fisioterapi</h3>
                    <ul>
                        <li>Nyeri punggung bawah</li>
                        <li>Nyeri leher dan bahu</li>
                        <li>Arthritis dan nyeri sendi</li>
                        <li>Cedera olahraga</li>
                        <li>Pasca operasi</li>
                        <li>Stroke dan gangguan neurologis</li>
                    </ul>
                    
                    <h3>Teknik Fisioterapi</h3>
                    
                    <h4>1. Terapi Manual</h4>
                    <p>Manipulasi jaringan lunak dan mobilisasi sendi untuk mengurangi nyeri dan meningkatkan mobilitas.</p>
                    
                    <h4>2. Latihan Terapeutik</h4>
                    <p>Program latihan khusus untuk memperkuat otot, meningkatkan fleksibilitas, dan memperbaiki postur.</p>
                    
                    <h4>3. Elektroterapi</h4>
                    <p>Penggunaan listrik untuk stimulasi otot, mengurangi nyeri, dan mempercepat penyembuhan.</p>
                    
                    <h4>4. Terapi Panas dan Dingin</h4>
                    <p>Aplikasi panas untuk relaksasi otot dan dingin untuk mengurangi peradangan.</p>
                    
                    <h3>Manfaat Fisioterapi</h3>
                    <ol>
                        <li>Mengurangi atau menghilangkan nyeri</li>
                        <li>Meningkatkan mobilitas dan fungsi</li>
                        <li>Mencegah operasi</li>
                        <li>Pemulihan dari cedera atau stroke</li>
                        <li>Meningkatkan keseimbangan dan mencegah jatuh</li>
                        <li>Mengelola kondisi kronis</li>
                    </ol>
                    
                    <p>Tim fisioterapis profesional di Klinik Wijaya siap membantu Anda mendapatkan solusi terbaik untuk nyeri dan gangguan gerak Anda.</p>',
            ],
            [
                'title' => 'Deteksi Dini Diabetes: Tanda-tanda yang Harus Diwaspadai',
                'category' => 'Tips Kesehatan',
                'excerpt' => 'Diabetes dapat berkembang tanpa gejala yang jelas. Kenali tanda-tanda awal untuk deteksi dan penanganan dini.',
                'content' => '<h2>Tentang Diabetes</h2>
                    <p>Diabetes mellitus adalah penyakit metabolik yang ditandai dengan kadar gula darah yang tinggi. Di Indonesia, jumlah penderita diabetes terus meningkat setiap tahunnya.</p>
                    
                    <h3>Tanda-tanda Awal Diabetes</h3>
                    
                    <h4>Gejala Klasik (3P)</h4>
                    <ul>
                        <li><strong>Poliuria:</strong> Sering buang air kecil, terutama di malam hari</li>
                        <li><strong>Polidipsia:</strong> Sering merasa haus</li>
                        <li><strong>Polifagia:</strong> Sering merasa lapar meskipun sudah makan</li>
                    </ul>
                    
                    <h4>Gejala Lainnya</h4>
                    <ul>
                        <li>Penurunan berat badan tanpa sebab jelas</li>
                        <li>Mudah lelah dan lemas</li>
                        <li>Penglihatan kabur</li>
                        <li>Luka yang sulit sembuh</li>
                        <li>Kesemutan di tangan dan kaki</li>
                        <li>Kulit kering dan gatal</li>
                    </ul>
                    
                    <h3>Faktor Risiko Diabetes</h3>
                    <ol>
                        <li>Riwayat keluarga dengan diabetes</li>
                        <li>Obesitas atau kelebihan berat badan</li>
                        <li>Kurang aktivitas fisik</li>
                        <li>Usia di atas 45 tahun</li>
                        <li>Tekanan darah tinggi</li>
                        <li>Kadar kolesterol tinggi</li>
                        <li>Riwayat diabetes gestasional</li>
                    </ol>
                    
                    <h3>Pentingnya Deteksi Dini</h3>
                    <p>Deteksi dini diabetes sangat penting untuk mencegah komplikasi serius seperti:</p>
                    <ul>
                        <li>Penyakit jantung dan stroke</li>
                        <li>Kerusakan ginjal</li>
                        <li>Kerusakan saraf</li>
                        <li>Gangguan penglihatan hingga kebutaan</li>
                        <li>Masalah kaki yang dapat berujung amputasi</li>
                    </ul>
                    
                    <h3>Pemeriksaan di Klinik Wijaya</h3>
                    <p>Klinik Wijaya menyediakan layanan pemeriksaan diabetes lengkap termasuk:</p>
                    <ul>
                        <li>Pemeriksaan gula darah puasa</li>
                        <li>Tes HbA1c</li>
                        <li>Tes toleransi glukosa oral</li>
                        <li>Konsultasi dengan dokter spesialis</li>
                    </ul>
                    
                    <p>Jangan tunggu sampai terlambat. Lakukan pemeriksaan kesehatan rutin untuk deteksi dini diabetes.</p>',
            ],
        ];
        
        foreach ($articles as $articleData) {
            $category = Category::where('slug', Str::slug($articleData['category']))->first();
            
            Article::create([
                'title' => $articleData['title'],
                'slug' => Str::slug($articleData['title']),
                'excerpt' => $articleData['excerpt'],
                'content' => $articleData['content'],
                'category_id' => $category?->id ?? 1,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
