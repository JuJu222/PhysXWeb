<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Topik 1
        DB::table('fis10_questions')->insert([
            'question_id' => 1,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Energi kinetik (Ek) dinyatakan oleh Ek = (1/2​​)mv2. Besaran energi kinetik adalah ...",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 2,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Besaran yang dimensinya MLT-2 adalah Gaya",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 3,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Besar gaya elastis sebuah pegas dinyatakan oleh F = kx, dengan k adalah konstansta pegas dan x adalah perubahan panjang pegas. Dimensi konstanta adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 4,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Luas suatu Bujur sangkar mempunyai satuan cm^2, maka panjang salah satu sisinya adalah mempunyai satuan ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 5,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Satu pascal setara dengan satu newton per meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 6,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Rumus dimensi daya adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 7,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Besaran pokok panjang dapat diturunkan menjadi ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 8,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Kuat arus listrik mempunyai satuan Kelvin",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 9,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Dibawah ini yang merupakan satuan besaran pokok adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 10,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Satuan dari waktu adalah s (sekon)",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of Topik 1

        //Topik 2
        DB::table('fis10_questions')->insert([
            'question_id' => 11,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Vektor adalah besaran yang mempunyai nilai dan arah",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 12,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Rumus diatas adalah rumus sinus untuk menghitung resultan vektor",
            'image_path' => "https://drive.google.com/uc?export=view&id=1FD2L6A1NeyGxo2IMj-pU8_YzwaxZwsCJ",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 13,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Aturan .... digunakan untuk menentukan arah vektor resultan",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 14,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Seorang anak berlari menempuh jarak 80 m ke utara, kemudian membelok ke timur 80 m dan ke selatan 20 meter. Besar perpindahan yang dilakukan anak tersebut adalah adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 15,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Budi berjalan sejauh 6 meter ke timur, kemudian 6 meter ke selatan dan 2 meter ke timur. Perpindahan Budi dari posisi awal adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 16,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Resultan ketiga gaya pada gambar di atas adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1I5Zta_nzyDm1xvT2A7_WAFvBbsA5jfoj",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 17,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Seorang anak berjalan lurus 80 meter ke utara, kemudian belok ke timur sejauh 80 meter, dan belok lagi ke selatan sejauh 20 meter. Perpindahan yang dilakukan anak tersebut dari posisi awal adalah 100 meter, ke arah barat laut",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 18,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Pada perlombaan tarik tambang, kelompok A menarik ke arah timur dengan gaya 700 N. Kelompok B menarik ke barat dengan gaya 665 N. Kelompok yang memenangi perlombaan adalah kelompok A dengan resultan gaya 35 N",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 19,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah mobil bergerak dengan kecepatan 50 km/jam membentuk sudut 30° terhadap sumbu x positif. Besar komponen vektor kecepatan tersebut pada sumbu x dan sumbu y berturut-turut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 20,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Perhatikan gambar gaya diatas ini! Besar resultan ketiga gaya tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1ZPfDFYmavBrsOi4o_zZnD5Z4sb6nkMhi",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of Topik 2

        //Topik 3
        DB::table('fis10_questions')->insert([
            'question_id' => 21,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Suatu benda dikatakan bergerak apabila ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 22,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Benda jatuh termasuk gerak lurus ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 23,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Saat sebuah benda bergerak dengan kecepatan tetap, maka percepatan benda sama dengan 0",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 24,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Sebuah mobil bergerak dengan kelajuan rata-rata 80 km/jam selama 60 menit. Jarak yang ditempuh mobil tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 25,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Budi berlari dengan kelajuan 6 m/s. Berapa selang waktu yang dibutuhkan Budi untuk berlari sejauh 1,5 km ?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 26,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Seseorang berlari selama 10 sekon, posisinya berubah dari 30 m menjadi 50 m. Kecepatan rata-rata orang berlari tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 27,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Adi dan Niko berjanji akan bertemu di taman kompleks untuk bermain sepulang sekolah. Taman yang letaknya di antara rumah mereka berjarak dua kali lebih dekat ke rumah Niko. Jika Adi membutuhkan waktu 1 jam dari rumahnya ke taman, maka butuh berapa lama untuk Niko dari rumahnya ke taman jika kecepatan mereka sama",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 28,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Jika seekor kura-kura membutuhkan 20 jam untuk menempuh jarak 1 kilometer. Maka kura-kura membutuhkan waktu 55 jam untuk menempuh jarak 2.5 kilometer",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 29,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah mobil mengalami perlambatan konstan, kecepatan mula-mula 90 km/jam. Setelah menempuh jarak 100 m kecepatannya menjadi 54 km/jam. Jarak yang masih harus ditempuh sampai mobil berhenti adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 30,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Benda yang awalnya berkecepatan 20 m/s ternyata berubah menjadi 5 m/s setelah menempuh jarak 8 meter. Berapa jauh lagi jarak yang ia tempuh hingga berhenti",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of Topik 3

        DB::table('fis10_questions')->insert([
            'question_id' => 31,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Rumus diatas pada gambar diatas adalah rumus untuk menghitung y-maks",
            'image_path' => "https://drive.google.com/uc?export=view&id=1PhpQPr7tA_6sfpaq_zJ1GC6cRNsizFrd",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 32,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "v0 adalah .... pada rumus gerak parabola",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 33,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah pesawat terbang bergerak mendatar dengan kecepatan 100 m/s melepaskan bom dari ketinggian 500 m. Jika bom jatuh di di tanah dan g = 10 m/s2, maka jarak titik terjauh terhadap sumbu X adalah adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 34,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah benda dilempar dengan sudut elevasi 60 derajat dan dengan kecepatan awal 10 m/s. Berapakah besar dan arah kecepatan setelah 1/2 akar 3 sekon ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 35,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Sebuah bola dilempar dengan kecepatan awal 20 m/s dengan sudut 30 derajat terhadap bidang horizontal. Jika percepatan gravitasi di tempat tersebut 9,8 m/s^2, maka waktu yang diperlukan untuk mencapai ketinggian maksimum adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 36,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Sebuah bola ditendang dengan kecepatan awal 20 m/s dan sudut elevasi 30 derajat. Jarak maksimum yang dicapai bola adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 37,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Sebuah peluru ditembakkan dengan kecepatan 60 m/s dan dengan sudut elevasi 30 derajat. Ketinggian maksimum yang dicapai adalah 50 m",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 38,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Seorang anak menendang bola menuju sebuah sasaran yang terletak pada jarak 100 m dengan sudut elevasi peluru 45 derajat dan kecepatan awal (50/akar 2 m/s). Maka ketinggian sasaran yang dikenai bola dari tanah adalah 16 m",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 39,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Ali melempar bola basket dengan kecepatan 20 m/s dan sudut elevasi 30 derajat. Waktu yang dibutuhkan bola basket untuk sampai dititik tertinggi adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 40,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Seorang murid menendang bola dengan kecepatan awal pada arah vertikal 9 m/s dan kecepatan awal pada arah mendatar 12 m/s. Tentukanlah besar kecepatan awal bola tersebut.",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 4

        //Topik 5
        DB::table('fis10_questions')->insert([
            'question_id' => 41,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Partikel bergerak melingkar dengan kecepatan sudut konstan w maka setelah t perubahan posisi sudutnya dituliskan sebagai Δθ rumus dari perubahan posisi sudutnya adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 42,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Jumlah putaran tiap detik dan periode adalah waktu yang dibutuhkan untuk melakukan satu putaran disebut dengan frekuensi",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 43,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Perubahan arah kecepatan linier diakibatkan oleh adanya percepatan membundar",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 44,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Benda bergerak melingkar beraturan mempunyai kelajuan ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 45,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Rumus diatas adalah rumus ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-eyazgkXD0Hp_qSIlfjkTNZyR6Zybg-w",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 46,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah peluru ditembakkan dengan kecepatan 60 m/s dan dengan sudut elevasi 30 derajat. Ketinggian maksimum yang dicapai adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 47,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Waktu yang dibutuhkan untuk mencapai ke ketinggian maksimum sama dengan waktu yang dibutuhkan untuk turun sampai mencapai ketinggian yang sama dengan titik awal bergerak.",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 48,
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Sebuah benda bergerak melingkar beraturan dengan jari-jari 4 meter, dalam waktu 2 sekon mengalai perpindahan sudut sebesar 1/6 putaran. Kelajuan linear benda tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 49,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah benda yang massanya 50 gram diikat dengan tali kemudian diputar sehingga benda bergerak melingkar beraturan dengan kecepatan sudut 10 rad/s. Jika panjang tali 100 cm dan tegangan pada tali diabaikan, besar gaya sentripetal yang terjadi adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 50,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sistem roda-roda menunjukkan roda B dan roda C sepusat, roda B dan roda A dihubungkan dengan tali. Roda A, B dan C memiliki jari-jari masing-masing 30 cm, 15 cm dan 40 cm. Apabila roda A diputar dengan kecepatan sudut 15 rad/s maka kecepatan linear roda C adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 5
        //Start of topik 6

        DB::table('fis10_questions')->insert([
            'question_id' => 51,
            'question_type' => "tof",
            'score' => 50,
            'question' => "'Percepatan (perubahan dari kecepatan) dari suatu benda akan sebanding dengan resultan gaya (jumlah gaya) yang bekerja pada benda tersebut dan berbanding terbalik dengan massa benda' adalah definisi dari Hukum Newton 1",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 52,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Ke manakah balok di bawah ini akan bergerak? Dan dengan percepatan berapakah? Anggap lantai licin tanpa hambatan.",
            'image_path' => "https://blog.teman-belajar.com/wp-content/uploads/2021/07/Contoh-Soal-300x168.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 53,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "'Saat naik mobil yang bergerak cepat lalu direm, maka penumpang otomatis terdorong ke depan' adalah contoh Hukum Newton ke- .. ?",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 54,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "'Sebuah koin yang ditaruh di atas kain lalu kain itu ditarik cepat dan koin tetap berada di tempatnya' adalah contoh Hukum Newton ke- .. ?",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 55,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "'w = m x g' adalah Rumus gaya ..",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 56,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "'Tiap aksi menimbulkan reaksi adalah definisi dari Hukum Newton ke- ..",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 57,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Waktu melempar batu secara vertikal ke atas. Awalnya batu melaju konstan ke atas, lalu melambat dan berhenti akibat adanya gaya gravitasi. Batu tersebut selanjutnya turun ke Bumi dengan kecepatan dari massa batu ditambah gaya gravitasi yang mempercepatnya.",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 58,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Saat memukul paku memakai palu. Paku adalah gaya aksi dan gaya dari palu merupakan gaya reaksi dari pemukulan melalui palu.",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 59,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Sifat benda yang cenderung mempertahankan keadaannya disebut dengan sifat kelembaman atau inersia.",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        

        DB::table('fis10_questions')->insert([
            'question_id' => 60,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "'Percepatan sebuah benda akan berbanding lurus dengan gaya total yang bekerja padanya serta berbanding terbalik dengan massanya. Arah percepatan akan sama dengan arah gaya total yang bekerja padanya.' adalah definisi dari hukum newton ke- ..",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //Topik 7 easy
        DB::table('fis10_questions')->insert([
            'question_id' => 61,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gravitasi adalah gejala adanya interaksi dua benda bermassa yaitu berupa gaya tarik-menarik",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 62,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Planet Q memiliki jari-jari rata-rata 4 kali jari-jari rata-rata bumi. Adapun percepatan gravitasinya 1/4 kali percepatan gravitasi bumi. Jika massa bumi sebesar m, massa planet Q sebesar . . . .",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        
        DB::table('fis10_questions')->insert([
            'question_id' => 63,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gambar berikut adalah rumus percepatan gravitasi bumi",
            'image_path' => "https://1.bp.blogspot.com/-i34UvwAioB8/WMPj_d0U3bI/AAAAAAAAAHY/aipnR8q92Uo1svoBvMHn1b6h7fwwL0UDwCLcB/s200/rumus%2Bgravitasi.png",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 64,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Percepatan gravitasi planet Y bernilai dua kali percepatan gravitasi bumi. jika massa bumi M dan jari-jari planet Y 4 kali jari-jari bumi, massa planet Y adalah . . . .",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 64,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Percepatan gravitasi planet Y bernilai dua kali percepatan gravitasi bumi. jika massa bumi M dan jari-jari planet Y 4 kali jari-jari bumi, massa planet Y adalah . . . .",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 65,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gaya tarik gravitasi yang bekerja antara dua benda sebanding dengan massa masing-masing benda dan berbanding terbalik dengan kuadrat jarak kedua benda.",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 66,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gambar berikut adalah rumus Hukum Gravitasi Newton",
            'image_path' => "http://2.bp.blogspot.com/-94JwfWfxbCE/UeOnDgTaG5I/AAAAAAAAACc/n1dlJK7p-Dw/s1600/aaaaaaa.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 67,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Benda ketika berada di atas permukaan bumi memiliki berat 900 N. Beratnya ketika berada sejauh 1/2 jari-jari Bumi di ukur dari permukaan bumi adalah ",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 68,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Planet A memiliki jari-jari sebesar x dan planet B memiliki jari-jari planet 1,5x. Perbandingan gravitasi di permukaan planet A dan planet B, jika besar massa planet A 2m dan massa planet B 2,5m adalah ...",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('fis10_questions')->insert([
            'question_id' => 69,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Dua benda mempunyai massa masing -masing m1 = 10 kg dan m2 = 14 kg. bila jarak kedua benda 20 m, tentukan gaya gravtasi antara kedua benda.",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 69,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Planet A memiliki jari-jari sebesar x dan planet B memiliki jari-jari planet 1,5x. Perbandingan gravitasi di permukaan planet A dan planet B, jika besar massa planet A 2m dan massa planet B 2,5m adalah ...",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 70,
            'question_type' => "mcq",
            'score' => 50,
            'question' => " Apabila dimensi panjang, massa, dan waktu berturut-turut adalah L, M, dan T, maka dimensi dan konstanta gravitasi adalah … .",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //Topik 8 Easy
        DB::table('fis10_questions')->insert([
            'question_id' => 71,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Usaha terjadi ketika energi dipindahkan dari satu sistem ke sistem lainnya.",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 72,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi diartikan sebagai kemampuan untuk melakukan usaha atau kerja. Energi tidak dapat diciptakan dan tidak dapat dimusnahkan.",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 73,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi kinetik adalah energi yang dimiliki benda karena keadaaan, kedudukan atau posisinya.",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 74,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Rumus energi kinetik adalah mgh",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 75,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi potensial adalah energi yang dimiliki oleh benda karena gerakannya",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 76,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi panas adalah energi yang menimbulkan perubahan suhu pada benda",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 77,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gambar di atas adalah rumus energi kinetik",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1623299049/uk3pimjerm8kkiapvyfr.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 78,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Gambar di atas adalah rumus energi panas",
            'image_path' => "https://4.bp.blogspot.com/-GpSHpr4VJx0/XKNoGvJhwwI/AAAAAAAAQvs/p5uTm4UDL4AgNF5D2H8sG7ThFBPX0p1IgCLcBGAs/s1600/rumus%2Bdaya%2Blistrik%2Bfisika%2Bsmp%2Bkelas%2B9.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 79,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi mekanik adalah gabungan dari energi potensial dan energi mekanik",
            'image_path' => "https://4.bp.blogspot.com/-GpSHpr4VJx0/XKNoGvJhwwI/AAAAAAAAQvs/p5uTm4UDL4AgNF5D2H8sG7ThFBPX0p1IgCLcBGAs/s1600/rumus%2Bdaya%2Blistrik%2Bfisika%2Bsmp%2Bkelas%2B9.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 80,
            'question_type' => "tof",
            'score' => 50,
            'question' => "Energi tidak dapat diciptakan namun dapat dimusnahkan.",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 8 easy
        //Start of topik 9 easy
        DB::table('fis10_questions')->insert([
            'question_id' => 81,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Seorang petinju mengarahkan pukulan ke kepala lawanya dalam selang waktu tertentu, kemudian tanganya ditarik kembali. Hasil kali antara gaya pukulan dengan selang waktu yang dialami oleh lawanya disebut ... .",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 82,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Perhatikan data atlet tersebut! Dari data atlet pelari tersebut manakah yang memiliki momentum paling besar?",
            'image_path' => "https://quizizz.com/media/resource/gs/quizizz-media/quizzes/018eeb7c-f6b2-4f5d-8edd-5d555a0f7c38",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 83,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Massa sebuah benda 4 kg diberi gaya 10 N hingga benda yang semula diam lalu bergerak dengan kecepatan 2 m/s. Besarnya momentum yang dimiliki benda tersebut adalah ...",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 84,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Saat terjadi kecelakaan bagian depan sebuah mobil didesain mudah ringsek saat terjadi benturan keras. Berkaitan dengan konsep impuls dan momentum hal tersebut dikarenakan .....",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]); 
        DB::table('fis10_questions')->insert([
            'question_id' => 85,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah truk melaju di jalan raya memiliki momentum yang besar. Jika truk tersebut bergerak dengan kecepatan tetap tetapi masanya dua kali lipat, maka momentumnya adalah ....",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]); 
        DB::table('fis10_questions')->insert([
            'question_id' => 86,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Pada setiap sembarang tumbuhan selalu berlaku ….",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]); 
        DB::table('fis10_questions')->insert([
            'question_id' => 87,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Kedua benda bergabung setelah tumbukan dan bergerak dengan kecepatan yang sama adalah....",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]); 
        DB::table('fis10_questions')->insert([
            'question_id' => 88,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Dua bola masing-masing 2 kg. Bola pertama bergerak ke arah timur dengan kecepatan 4 m/s dan bola kedua bergerak ke utara dengan kecepatan 3 m/s. maka, hitung dan tentukanlah momentum total kedua bola tersebut! Momentum total kedua bola tersebut adalah ... kg m/s",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]); 
        DB::table('fis10_questions')->insert([
            'question_id' => 89,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Kecepatan peluru saat lepas dari larasnya 200 m/s. Jika massa peluru dan senapan masing-masing 10 gram dan 5 kg, hitunglah kecepatan dorong senapan terhadap bahu penembak saat peluru lepas dari larasnya ?",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 90,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Sebuah trem 10.000 kg berjalan dengan laju 24 m/s menabrak trem sejenis yang berhenti. Jika trem menempel bersama sebagai akibat tumbukkan, berapa laju bersama mereka sesudahnya?",
            'image_path' => "https://www.pelajaran.co.id/wp-content/uploads/2016/12/Momentum.jpg",
            'topic_id' => 9,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //end of topik 9 easy

        DB::table('fis10_questions')->insert([
            'question_id' => 91,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Berikut adalah beberapa besaran penting dalam getaran dan gelombang, kecuali...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 92,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Definisi dari gerak harmonik adalah...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 93,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Perhatikan Gambar dibawah ini! Pada gambar berikut yang dimaskud dengan satu getaran adalah ...",
            'image_path' => "https://1.bp.blogspot.com/-44zlZdV-sMs/YBLcNQGjD_I/AAAAAAAAC6E/3hfwwJvg88MCntJt6JKFk-kzM72A7w_UACNcBGAsYHQ/w400-h280/soal%2B3%2Bgetaran.jpg",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 94,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Perhatikanlah gambar dibawah berikut ini!! satu getaran dapat diartikan bahwa pegas telah melakukan gerakan dari titik ...",
            'image_path' => "https://1.bp.blogspot.com/-uWQVvxg7aIE/YBLcTOLKc_I/AAAAAAAAC6I/o-O8MxoV3nQ3JTi1yoO629aRWjvlC_X-wCNcBGAsYHQ/w400-h278/soal%2B5%2Bgetaran.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 95,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Apabila sebuah titik melakukan 300 getaran sempurna tiap menit, maka frekuensi getaran titik itu adalah ...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 96,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Gaya yang menyebabkan benda bergerak menuju titik keseimbangannya kembali setelah mengalami simpangan pada gerak harmonis disebut...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 97,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Besar periode getaran sebuah benda tidak terpengaruh oleh…",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 97,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Besar periode getaran sebuah benda tidak terpengaruh oleh…",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 98,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Gaya pemulih akan menyebabkan pegas yang telah meregang kembali ke keadaan seimbangnya. Gaya merupakan besaran...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 99,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Dalam dua menit terjadi 960 getaran pada suatu partikel. Frekuensi dari getaran tersebut adalah ... Hz",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 100,
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Gerak bolak-balik benda melalui suatu titik kesetimbangan tertentu dengan banyaknya getaran benda dalam setiap sekon selalu konstan disebut ",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //Topik 10 Easy
        //Topik 1 Hard
        DB::table('fis10_questions')->insert([
            'question_id' => 101,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Kuat medan listrik pada sebuah titik mempunyai satuan ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 102,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah benda ketebalannya diukur dengan mikrometer sekrup seperti gambar diatas. Hasil pengukuran ketebalan benda adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=184HJc9S6pSaj1bGfil88gu5ZmM7TwCIK",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 103,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Gambar di atas ini merupakan penjumlahan vektor secara segitiga. Gambar yang resultan vektornya sama dengan nol adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=18DZcFW2smLRuHJBxnQxtPho_RMQnm8Jc",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 104,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua buah gaya (setitik tangkap) salig tegak lurus. Besarnya masing-masing 12 N dan 5 N. Besar resultan kedua gaya tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 105,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Gambar diatas adalah pengukuran massa benda dengan menggunakan neraca Ohauss lengan tiga. Hasil pengukuran massa benda yang tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1c9jn6emltan_UCy1YXeSyR8-PXPVVeUc",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 106,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Seorang anak mengukur tebal buku dan menunjukkan skala seperti pada gambar. Dari skala yang ditunjukkan tebal buku tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 107,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Hasil pengukuran panjang dan lebar sebidang tanah berbentuk empat persegi panjang adalah 15,35 m dan 12,5 m. Luas tanah menurut aturan angka penting adalah 191.88 m^2",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 108,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Ketebalan sebuah koin diukur menggunakan mikrometer sekrup menunjukkan nilai 35,67 mm. Maka konversi nilai tersebut dalam satuan meter adalah 0.03567 meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 109,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Tekanan merupakan satuan sendiri yang mempunyai dimensi ML^-2T^-2",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 110,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Pada termometer Fahrenheit dan Reamur akan menunjukkan angka yang sama pada suhu ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1-dpyDXasTLfUvwr-hc-OK2Iyk-63VUGz",
            'topic_id' => 11,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 1 hard

        DB::table('fis10_questions')->insert([
            'question_id' => 111,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah vektor gaya F1 dan F2 sama besar yaitu 30 N bertitik tangkap sama dan saling mengapit sudut 60 derajat. Resultan kedua vektor tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 112,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "2 buah vektor beasrnya sama yaitu 10 N. Jika keduanya dijumlahkan resultannya sampai dengan 10 N. Sudut apit antara kedua vektor adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 113,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua buah vektor besarnya sama, satu sama lain membentuk sudut theta. Jika perbandingan resultan dan selisih kedua vektor adalah akar 3, tentukan nilai theta tersebut ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 114,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Resultan ketiga vektor gaya tersebut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1Pa38O7YgnLazWhOteh9gl2MDFXKbJ-hP",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 115,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Tiga buah vektor memiliki arah seperti gambar di atas ini. Bila F1 = 2 N, F2 = 10 N, F3 = 6N",
            'image_path' => "https://drive.google.com/uc?export=view&id=1kgjbzgSOkuV5QBvyDvlaBd77alRjY-JP",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 116,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Besar resultan (a+b) adalah 8 satuan",
            'image_path' => "https://drive.google.com/uc?export=view&id=1mIz_8OBIiFWxVKXNhRu4YIS1RgJLK_mD",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 117,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Seekor anak macan berlari ke arah timur sejauh 9 meter, kemudian berbelok ke selatan dan berlari lagi sejauh 12 meter. Perpindahan yang dialami anak macan tersebut adalah 15 meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 118,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Dua buah vektor masing-masing besarnya 5 satuan dan 12 satuan dan satu sama lain berlawanan arah. Selisih kedua vektor tersebut adalah 12 satuan",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 119,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah gaya F = (2i + 3j) N melakukan usaha dengan titik tangkapnya berpindah menurut r = (4i + aj) m dan vektor i dan j berturut-turut adalah vektor satuan yang searah dengan sumbu x dan sumbu y pada koordinat kartesian. Bila usaha itu bernilai 26 J, maka nilai a sama dengan ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1WImlWJcxjTAHnOGcaxat9zEaOKRrNdyL",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 120,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Pernyataan yang benar adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1hoJb36utwnkNWWHnRbaYoTjdXEUKxEP9",
            'topic_id' => 12,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        //Hard Topik 3
        DB::table('fis10_questions')->insert([
            'question_id' => 121,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Seekor tikus bergerak sepanjang garis lurus yang dapat dinyatakan dengan persamaan berikut x=2t^2−3t−5, dengan x dalam meter dan t dalam sekon. Maka kecepatan rata-rata tikus dalam selang waktu antara t=1 sekon dan t = 2sekon adalah… ",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 122,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah bola dilemparkan oleh pemain bowling meluncur dengan kecepatan tetap pada lintasan sepanjang 17 m. Pemain mendengar bunyi bola mengenai sasaran 2,5 sekon setelah bola dilemparkan dari tangannya. Berapakah kelajuan bola apabila kelajuan bunyi udara 340 m/s?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 123,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua kereta listrik bergerak pada saat bersamaan dengna arah berlawanan pada dua rel lurus yang bersebelahan. Kelajuan masing-masing kereta adalah 72 km/jam dan 78 km/jam. Jika kedua kereta berpapasan setelah masing-masing bergerak selama 14 menit, berapa jarak antara kedua kereta mula-mula?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 124,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua mobil bergerak pada lintasan lurus dengan arah saling berlawanan. Mobil pertama bergerak dari P dengan kelajuan 40 km/jam dan mobil kedua dari Q bergerak 7 menit kemudian dengan kelajuan 60 km/jam. Jika jarak PQ = 15 km, kapankah kedua mobil itu bertemu?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 125,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah mobil bergerak di sebuah jalan tol. Pada jarak 5 kilometer dari pintu gerbang tol, mobil bergerak dengan kelajuan tetap 90 km/jam selama 20 menit. Maka posisi mobil dari gerbang jalan tol adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 126,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua orang A dan B terpisah sejauh 400 m, bergerak saling mendekat dengan kecepatan masing-masing 2 m/s dan 3 m/s. Posiis mereka akan beretemu diukur dari posisi B adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 127,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Seseorang anak memetik buah kelapa dari pucuk pohonnya. Sentakan tangan anak tersebut memberikan kecepatan awal 4,0 m/s pada buah kelapa dan kelapa jatuh di tanah setelah 1,2 sekon. Jika percepatan gravitasi 10 m/s2, maka ketinggian pohon kelapa adalah 10 meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 128,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah bola dilempar vertikal ke bawah dengan kecepatan 20 m/s dari dari suatu ketinggian 25 m. Maka selang waktu yang dibutuhkan oleh kelereng tersebut apabila percepatan gravitasi 10 m/s^2 adalah 1 sekon",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 129,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Bola P dan bola Q dilempar vertikal ke atas dari tanah dengan kecepatan 25 m/s dan bola Q dilempar vertikal ke bawah 1 sekon kemudian dengan kecepatan 15 m/s dari atap yang tingginya 80 m.  Kedua bola akan bertemu pada ketinggian 30 m di atas tanah saat bola P bergerak selama 3 detik dan bola Q bergerak 2 detik",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 130,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Kelapa yang sudah tua jatuh bebas dari pohon yang tingginya sekitar 20 meter. Bila percepatan gravitasi 10 m/s^2, berapa lama kira-kira kelapa melayang di udara samapai mengenai tanah?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1W_0cJ10WUpmccFR_So47UWsulyumPjJw",
            'topic_id' => 13,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 3 hardness


        //Topik 4 Hard
        DB::table('fis10_questions')->insert([
            'question_id' => 131,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah bola ditendang dengan sudut elevasi 53 derajat dan kecepatan awal 5 m/s. Tentukanlah jarak tempuh maksimum yang akan dicapai bola tersebut.",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 132,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Tentukanlah waktu yang dibutuhkan untuk mencapai ketinggian maksimum jika sebuah batu dilempar dengan sudut elevasi 30 derajat dan kecepatan awal 6 m/s.",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 133,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Bom dilepas dari pesawat, karena kecepatan pesawat dalam arah vertikal nol (vy = 0), maka bom dalam arah vertikal mengalami jatuh bebas, maka waktu yang diperlukan untuk sampai di sasaran (titik B) adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 134,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Seorang stuntman melaju mengendarai sepeda motor menuju ujung tebing setinggi 50 m. Kecepatan yang harus dicapai motor tersebut saat melaju dari ujung tebing menuju landasan dibawahnya sejauh 90 m dari tebing adalah 28.21 m/s. Abaikan gesekan udara.",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 135,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah peluru ditembakkan dengan kecepatan 60 m/s dan sudut elevasi 30°. Ketinggian maksimum yang dicapai adalah 50 meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 136,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah peluru ditembakkan dengan kecepatan 80 m/s dan sudut elevasi 45°. Ketinggian maksimum yang dicapai adalah 120 meter",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 137,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah bom dijatuhkan dari pesawat tempur tanpa kecepatan awal relatif terhadap pesawat. Jika ketinggian pesawat tempur 200 m dan jarak mendatar antara sasaran dengan pesawat tempur 600 m, maka kecepatan pesawat tempur relatif terhadap sasaran mendekati ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 138,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Diagram berikut menunjukkan lintasan sebuah proyektil yang ditembakkan dengan kecepatan horizontal v dari atap gedung setinggi h. Harga-harga v dan h berikut akan menghasilkan θ terbesar adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 139,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah parabola yang terbuka keatas melalui titik (3,5) dengan titik fokus (-1, 2). Tentukan koordinat titik puncak parabola.",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 140,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Pada gerak parabola, di titik manakah kelajuan benda paling kecil dan paling besar?",
            'image_path' => "https://drive.google.com/uc?export=view&id=13DFKCHfuGsA9bljWxB9W--dxqZui_ie2",
            'topic_id' => 14,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 4 hard


        //Topik 5 hard

        DB::table('fis10_questions')->insert([
            'question_id' => 141,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah benda bergerak melingkar dengan jari-jari 50 cm. Jika benda melakukan 120 rpm, maka waktu putaran dan kecepatan benda tersebut berturut-turut adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 142,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Pada sebuah benda yang bergerak beraturan dengan lintasan melingkar, kecepatan linearnya bergantung pada ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 143,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah benda putar dengan kecepatan sudut 40 rad/s. Kecepatan linier suatu titik pada benda berjarak 50 cm dari sumbu puntar adalah 20 meter/s",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 144,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah benda bergerak melingkar dengan radius 10 cm, dengan kecepatan sudut 10 rad/s. Kecepatan liniernya adalah 1 meter/s",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 145,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua buah roda P dan Q pada bagian luarnya dihubungkan dengan sabuk, seperti gambar. Kecepatan sudut roda P = 15 rad/s dan jari-jari roda P = 1/3 jari-jari roda Q. Kecepatan sudut roda Q adalah ....",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 146,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah roda berputar 430 putaran dalam waktu 1 menit maka tentukan periode putaran roda tersebut?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 147,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah titik partikel melakukan gerak melingkar beraturan. Jika dalam waktu 10 sekon dapat berputar 30 putaran, berapa jumlah putaran yang dilakukan dalam waktu 15 sekon?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 148,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Putaran spindel mesin bubut kayu adalah 800 putaran/menit. Berapa waktu yang diperlukan agar spindel berputar sebanyak 40 putaran?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('fis10_questions')->insert([
            'question_id' => 149,
            'question_type' => "tof",
            'score' => 100,
            'question' => "Sebuah ban sepeda berputar dalam waktu 2 sekon untuk satu kali putaran penuh. Periode putarannya adalah 1 sekon",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('fis10_questions')->insert([
            'question_id' => 150,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah compact disk berputar dengan lagu 200 putaran permenit nyatakan frekuensinya dalam herts berapakah frekuensinya?",
            'image_path' => "https://drive.google.com/uc?export=view&id=1tIBXyb3MSVCaypCiELjnn7yY06g499Z",
            'topic_id' => 15,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 5 hard
        //Topik 6 hard
        
    
        DB::table('fis10_questions')->insert([
            'question_id' => 151,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dhania menarik beban dengan bantuan katrol seperti pada gambar (a) di bawah ini. Pada saat gaya yang diberikan F = 125 N ternyata beban dapat terangkat dengan kecepatan tetap. g = 10 m/s2. Jika gaya gesek katrol dan massa tali dapat diabaikan maka berapakah massa beban tersebut?",
            'image_path' => "https://2.bp.blogspot.com/-LAYmNIQYKT4/Wypveivo6BI/AAAAAAAAEvE/1DLSLd0YFn4Mpcrqe63L726EY8nmGq2FgCLcBGAs/s1600/contoh-soal-hukum-1-newton-5.jpg",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 152,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Balok bermassa 20 kg berada di atas bidang miring licin dengan sudut kemiringan 30 derajat. Jika Ucok ingin mendorong ke atas sehingga kecepatannya tetap maka berapakah gaya yang harus diberikan oleh Ucok?",
            'image_path' => "https://3.bp.blogspot.com/-6Z420MZBqkQ/WypveSX1h7I/AAAAAAAAEu8/mAap75kC4mI1khb87Fb__nA7o-4y0cNVgCLcBGAs/s200/contoh-soal-hukum-1-newton-4.jpg",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 153,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah balok bermassa 5 kg (berat w = 50 N) digantung dengan tali dan diikatkan pada atap. Jika balok diam maka berapakah tegangan talinya?",
            'image_path' => "https://2.bp.blogspot.com/-ufcUL_fffPc/Wypvc9NtH0I/AAAAAAAAEu0/lCLnWANnGz48sv8ZOOWqyFQOwLkdik-2ACLcBGAs/s200/contoh-soal-hukum-1-newton-1.jpg",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 154,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Benda bermassa 10 kg diikat tali dan dibentuk sistem seperti pada gambar (a) berikut ini. Jika sistem itu diam dan percepatan gravitasi g = 10 m/s2 maka tentukan tegangan tali T1 dan T2!",
            'image_path' => "https://4.bp.blogspot.com/-X2lTx45bodY/Wypvek1bzwI/AAAAAAAAEvA/xqHUqEmmAdw9I1H_kOKYA8dRbRUUz6giACLcBGAs/s320/contoh-soal-hukum-1-newton-3.jpg",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        
        DB::table('fis10_questions')->insert([
            'question_id' => 155,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah truk dapat menghasilkan gaya sebesar 7000 N. Jika truk tersebut dapat bergerak dengan percepatan 3,5 m/s2, maka tentukan massa truk tersebut!",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 156,
            'question_type' => "mcq",
            'score' => 100,
            'question' => " Balok A bermassa 4 kg diletakkan di atas balok B yang bermassa 6 kg. Kemudian balok B ditarik dengan gaya F di atas lantai mendatar licin sehingga gabungan balok itu mengalami percepatan 1,8 m/s2. Jika tiba-tiba balok A terjatuh maka berapakah percepatan yang dialami oleh balok B saja?",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 157,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Dua balok (m1 dan m2) yang bersentuhan mula-mula diam di atas lantai licin seperti yang ditunjukkan pada gambar di bawah ini. Jika m1 = 70 kg, m2 = 30 kg dan pada balok pertama dikerjakan gaya sebesar 200 N, maka tentukanlah percepatan masing-masing balok dan gaya kontak antarbalok tersebut.",
            'image_path' => "https://2.bp.blogspot.com/-_rIrvIUAqIk/WahQhvl-wAI/AAAAAAAAB50/UwFkTD5Y6pI4CpnlWBee8AknkdyO5sIlgCLcBGAs/s200/Contoh-Soal-%25231a.png",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 158,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Balok A dan balok B terletak di atas permukaan bidang miring licin dengan sudut kemiringan 37°. Massa balok A 40 kg dan massa balok B 20 kg. Kemudian balok A didorong dengan gaya F sebesar 480 N seperti yang diperlihatkan pada gambar di bawah ini. Tentukan besar percepatan gerak kedua balok dan juga gaya kontak antara balok A dan balok B.",
            'image_path' => "https://4.bp.blogspot.com/-v-e5pbL3w1k/WamZ8dGqz8I/AAAAAAAAB6g/K6cmgP6eMdoJC6HVJ2O3Z4qLrD9auh7oQCLcBGAs/s200/Contoh-Soal-%25231a.png",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 159,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Jika suatu benda diberi gaya 20 N, benda tersebut memiliki percepatan 4 m/s2. Berapakah percepatan yang dialami benda tersebut jika diberi gaya 25 N?",
            'image_path' => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1606795836/jli8jnfegfn6rbpvunnb.png",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 160,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Sebuah benda bermassa 2 kg bergerak dengan kecepatan awal 5 m/s di atas bidang datar licin, kemudian benda tersebut diberi gaya tetap searah dengan gerak benda. Setelah menempuh jarak 4 m, kecepatan benda menjadi 7 m/s. Tentukan besar gaya tersebut!",
            'image_path' => "https://3.bp.blogspot.com/-iYt2tiyOz6U/WyqXfcdkUwI/AAAAAAAAEvg/MCzaTtNPh5UkNFLRfkJF6gWakt2IBrGOACLcBGAs/s1600/contoh-soal-hukum-2-newton-2.jpg",
            'topic_id' => 16,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 6 hard
        //Start of topik 7 hard
        DB::table('fis10_questions')->insert([
            'question_id' => 161,
            'question_type' => "mcq",
            'score' => 100,
            'question' => " Jika Bumi menyusut menjadi setengah semula, tapi massanya tetap, maka apa yang terjadi dengan massa benda-benda yang ada di permukaan bumi?",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 162,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Benda berada pada ketinggian tertentu diatas permukaaan bumi. Percepatan gravitasi pada ketinggian tersebut sebesar 3/4 g. Jika R adalah jari-jari bumi dan g adalah percepatan gravitasi di permukaan bumi, ketinggian benda adalah . . . .",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 163,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah planet A memiliki jari-jari R dan bermassa M. Benda bermassa m berada di permukaan planet (di titik P) dan berpindah ke atas permukaan planet sejauh R diukur dari permukaan planet ( di titik Q). Besar usaha yang diperlukan untuk memindahkan benda bermassa m dari P ke titik Q adalah ....",
            'image_path' => "https://4.bp.blogspot.com/-neP8YZEyQZo/V7uW9ccID2I/AAAAAAAADQs/Cv3gcY31qmE_nLoNAqLwn8Cw6-gElNr9QCLcB/w320-h204/10%2BGaya%2BGravitasi.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 164,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Jupiter merupakan planet terbesar dalam system tata surya. Massa Jupiter adalah 9,56 x 10^-4 kali massa matahari dan jaraknya ke matahari adalah 7,78 x 10^11 m. Tentukan lokasi di antara Jupiter dan matahari dimana gaya gravitas Jupiter dan matahari saling meniadakan.",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 165,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Perhatikan gambar di atas. Jika m1 = 10 Kg, m2 = 20 Kg dan m3 = 30 Kg. Tentukan gaya gravitasi pada massa 1 ( F1 )",
            'image_path' => "https://1.bp.blogspot.com/-a-BFv3MQsPI/YBYlCRJNdWI/AAAAAAAAKjc/lfiq2l96K-I2EhorckGnSqqUGGY8rr3sQCLcBGAsYHQ/w400-h186/5.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 166,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Perhatikan gambar di atas. Jika m1 = 10 Kg, m2 = 36 Kg dan m3 = 64 Kg. Tentukan gaya gravitasi pada massa 1 ( F1 ) ",
            'image_path' => "https://1.bp.blogspot.com/-B7kx_8AVAKc/YBaM_Y1bN4I/AAAAAAAAKkA/s3MVm5flcecKPVN3J-t46vZ8zRskWXY-QCLcBGAsYHQ/w269-h320/6.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 167,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "  Jika kuat medan gravitasi disuatu titik sama dengan nol, maka jarak titik tersebut dari kulit bola A adalah … ",
            'image_path' => "https://3.bp.blogspot.com/-XAeJxupz_gs/XAuDWZH0hoI/AAAAAAAACFk/6iPN7jo3f6Myh8RO_TG2mFGuqjNEaMF9wCLcBGAs/s1600/S9%2BGRAVITASI-min.png",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 168,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Benda 1 dan benda 2 bermassa sama 3 kg. Maka besar gravitasi yang timbul di titik P adalah ....",
            'image_path' => "https://1.bp.blogspot.com/-vQEJKPu_sh8/V7uTfTZCcuI/AAAAAAAADQY/yRzw2mXE6RknzNs5txpFxfpBsD_jWZNvACLcB/w320-h312/7%2BGaya%2BGravitasi.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 169,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Besar gaya gravitasi yang dialami oleh benda ketiga akibat pengaruh hanya benda 1 dan benda 2 adalah ....",
            'image_path' => "https://4.bp.blogspot.com/-s2dU5ilu8Kc/V7uf9K4kYqI/AAAAAAAADRU/2uoTnMWzuioj81uzYQWMTJuYJ1OBsTu1gCLcB/w320-h186/11%2BGaya%2BGravitasi.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 170,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Tetapan gravitasi G memiliki satuan-satuan dasar SI, yaitu ...",
            'image_path' => "https://www.harapanrakyat.com/wp-content/uploads/2019/09/Rumus-Hukum-Gravitasi-Newton.jpg",
            'topic_id' => 17,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //Topik 8 hard
        DB::table('fis10_questions')->insert([
            'question_id' => 171,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Benda bermassa 10 kg bergerak diatas permukaan yang datar dan licin tanpa geya gesek, jika benda di dorong dengan gaya100 N yang membentuk sudut 60° terhadap arah horisontal. Besar usaha jika perpindahan benda sejauh 5 m adalah … .",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 172,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Yang dilakukan oleh suatu gaya terhadap benda sama dengan nol apabila arah gaya dengan perpindahan benda membentuk sudut sebesar … .",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 173,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Balok bermassa 10 kg berada di atas lantai licin seperti gambar. Balok ditarik dengan gaya F =25 N membentuk sudut 37° terhadap arah horizontal. Setelah berpindah ke kanan 2 m besar usaha oleh gaya F sebesar ....",
            'image_path' => "https://3.bp.blogspot.com/-wzxKkDHO2mA/WDuGyOQ3YDI/AAAAAAAAAO0/qawkWk_DjHIBKHWBhCYlfpsmL-ztgoKBACEw/s200/soal%2Bno%2B10.jpg",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 174,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah balok bermassa 4 kg bergerak dengan kecepatan awal 10 m/s di atas lantai yang kasar. Karena kekasaran lantai tersebut, kecepatan balok bisa turun menjadi 5 m/s setelah menempuh jarak tertentu. Perubahan energi kinetik balok sebesar ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 175,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah balok bermassa 1 kg menumbuk pegas yang posisinya mendatar seperti gambar. Saat balok menumbuk pegas kecepatannya 1,5 m/s dan dapat menekan pegas sejauh 10 cm. Konstant pegas tersebut sebesar...",
            'image_path' => "https://3.bp.blogspot.com/-daV7qBW6JZA/WDuI9XYDt-I/AAAAAAAAAPA/4RRYMByQFl8vgu6ZnNTN8Frz3-QI-gflACEw/s200/soal%2Bpegas.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 175,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah balok bermassa 1 kg menumbuk pegas yang posisinya mendatar seperti gambar. Saat balok menumbuk pegas kecepatannya 1,5 m/s dan dapat menekan pegas sejauh 10 cm. Konstant pegas tersebut sebesar...",
            'image_path' => "https://3.bp.blogspot.com/-daV7qBW6JZA/WDuI9XYDt-I/AAAAAAAAAPA/4RRYMByQFl8vgu6ZnNTN8Frz3-QI-gflACEw/s200/soal%2Bpegas.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 176,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dalam gambar berikut, partikel bergerak lurus secara horizontal. Usaha total yang dilakukan partikel untuk berpindah sejauh 15 m adalah . . .",
            'image_path' => "https://1.bp.blogspot.com/-NTj2QfHZdKA/YHKKjc-hS_I/AAAAAAAACMo/iHX68EN67GYLwar98vYyblBYOVaz6ZwdwCLcBGAsYHQ/w320-h166/partikel-bergerak-lurus-secara-horisontal.-usaha-total-yang-dilakukan-partikel-untuk-berpindah-sejauh-15-m.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 177,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Gaya gravitasi bekerja antara Matahari dan bumi. Jika kita asumsikan orbit bumi terhadap matahari adalah lingkaran, maka usaha oleh gaya gravitasi pada interval waktu yang pendek adalah ... N",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 178,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Kereta belanja meluncur pada bidang miring karena hentakan angin. Kemudian, seorang ibu mendorong kereta tersebut dengan gaya F = 20i + 30j N. Kereta  mengalami perpindahan s = 3i + 4j meter.  besar usaha oleh gaya untuk memindahkan kereta adalah ... J",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 179,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Di jalan yang menurun, sepeda meluncur cepat meskipun tidak dikayuh. hal ini disebabkan...",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('fis10_questions')->insert([
            'question_id' => 180,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Seekor elang terbang pada ketinggian 8 m dengan kecepatan 2 m/s. Perbandingan energi potensial dan energi kinetik elang adalah ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 18,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //Topic 9 hard
        DB::table('fis10_questions')->insert([
            'question_id' => 181,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Bola kasti bermassa 100 gram dilempar mendatar oleh Rina dengan kelajuan 5 m/s. kemudian bola kasti tersebut dipukul searah dengan arah mula-mula. Bila lamanya bola kasti bersentuhan dengan 2 m/s dan kecepatan bola kasti setelah meninggalkan pemukul 10 m/s maka hitunglah berapa besar gaya yang diberikan oleh pemukul!",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 182,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Bola bermassa 10 gram jatuh bebas dari ketinggian tertentu, menumbuk lantai dengan kecepatan 15 m/s lalu terpantul ke atas dengan kecepatan 10 m/s. Impulsnya .. kg m/s",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 183,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Bola bermassa 200 gram dilempar horisontal dengan kecepatan 4 m/s, lalu bola dipukul searah dengan arah bola mula-mula. Lamanya bola bersentuhan dengan pemukul adalah 2 milisekon dan kecepatan bola setelah meninggalkan pemukul adalah 12 m/s. Besar gaya yang diberikan oleh pemukul pada bola adalah … N",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 184,
            'question_type' => "fitb",
            'score' => 100,
            'question' => "Berapa impuls bola bermassa 5 kg yang kemudian mengalami perubahan kecepatan, dari yang semula diam lalu menjadi 10ms^−1? Impuls bolanya ... kgms^-1",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 185,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah bola bermassa 200 g bergerak dengan kelajuan 6 m/s menuju dinding dengan arah tegak lurus. Bola tersebut menumbuk dinding selama 0,2 detik dan dipantulkan tegak lurus dinding dengan kelajuan 4 m/s. besar gaya yang diberikan dinding pada bola adalah ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 186,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Benda dengan massa konstan mempunyai momentum p dan energi kinetik EK. Jika energi kinetik berubah menjadi 4EK, momentumnya menjadi ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 187,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah benda yang memiliki massa m1 = m2 = 2 kg bergerak saling mendekati dengan kelajuan masing – masing v1 = 10 m/s dan v2 = 20 m/s seperti pada gambar. jika kedua benda bertumbukan lenting sempurna, kecepatan masing – masing benda setelah bertumbukan adalah ....",
            'image_path' => "https://1.bp.blogspot.com/-DvPO3bbHKTU/YFl3qvGYg3I/AAAAAAAAE9M/rBx699XumKE_b_Rr3ZxXE6wdweUV73zSQCLcBGAsYHQ/w320-h83/11.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 188,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah benda A dan B masing – masing mempunyai massa 1 kg dan 3 kg bergerak dengan arah sama yaitu ke kanan dengan besar masing – masing 6 m/s dan 2 m/s (A mengejar B), kemudian terjadi tumbukan bersifat lenting sempurna. Besar kecepatan A dan B masing – masing setelah tumbukan adalah ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 189,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah mobil dengan massa 3 ton bergerak ke timur dengan kelajuan 40 km/jam. pada saat yang sama sebuah truk dengan massa 5 ton bergerak ke selatan dengan kelajuan 10 km/jam. di perempatan jalan mobil dan truk ini bertabrakan. Jika keduanya bergandengan setelah tabrakan. Kelajuan keduanya sesaat setelah tabrakan adalah ....",
            'image_path' => "https://www.quipper.com/id/blog/wp-content/uploads/2019/08/Usaha-dan-Energi-Fisika-Kelas-11-c.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 190,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebutir peluru yang massanya 0,01 kg ditembakkan pada suatu ayunan balistik bermassa 1 kg, sehingga peluru bersarang di dalamnya dan ayunan naik setinggi 0,2 m dari kedudukan semula. Jika g = 10 m/s², kecepatan peluru yang ditembakkan adalah.... m/s",
            'image_path' => "https://1.bp.blogspot.com/-A5LKN2tN5Uk/XiM9D6HFzLI/AAAAAAAAv8w/VbQ9KVjo_KkDhiS29kgp6zsJ6RVTR1tbwCLcBGAsYHQ/s200/tumbukan3.png",
            'topic_id' => 19,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        //End of topik 9 hard
        DB::table('fis10_questions')->insert([
            'question_id' => 191,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah bandul disimpangkan dengan θ = 10 derajat,  bandul memiliki massa sebesar 3,5 g. hitunglah periode dari bandul, bila bandul memiliki panjang tali yang menggantungnya yaitu 25 cm. percepatan grafitasi sebesar 10 m/s2",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 192,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua ayunan sederhana masing-masing panjang talinya 25 cm dan 49 cm. perbandingan frekuensi getaran antara kedua ayunan adalah……………. ",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 193,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Kecepatan sebuah benda saat bergetar harmonis pada suatu saat adalah 1/4 Vmaks (Vmaks= kecepatan maksimum ).Bila amplitudo getaran A. maka besar simpangan saat itu adalah…",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 194,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Suatu benda mengalami gerak harmonic sederhana dengan periode π/2 sekon dan amplitude 0,6 meter. Pada t = 0s dan y = 0, berapa jauh benda dari posisi keseimbangannya ketika t = π/3 sekon",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 195,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah ayunan A dan B memiliki panjang tali yang sama. Jika ayunan pertama digetarkan dengan simpangan empat kali ayunan kedua, maka ….",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 195,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah ayunan A dan B memiliki panjang tali yang sama. Jika ayunan pertama digetarkan dengan simpangan empat kali ayunan kedua, maka ….",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('fis10_questions')->insert([
            'question_id' => 196,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah benda bergerak harmonik dengan persamaan y = 5 sin πt + π/2 m. Tentukan amplitudonya",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 197,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dimanakah letak sebuah titik yang melakukan gerakan harmonis jika kecepatannya 1/2 kecepatan maksimumnya ?",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 198,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Dua buah pegas yang disusun secara seri berturut-turut besar konstantanya 100 N/m dan 150 N/m. Apabila pada pegas tersebut diberi beban 30 N, maka pegas akan bertambah panjang sebesar ...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 199,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Sebuah pegas akan bertambah panjang 15 cm jika digantungi beban yang massanya 5 kg, maka kontanta pegas adalah...",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 200,
            'question_type' => "mcq",
            'score' => 100,
            'question' => "Beban bermasa 50 gram bergerak harmonik sederhana dengan amplitudo 10 cm dan periode 0,2 s, besar gaya yang bekerja pada sistem saat simpangannya setengah amplitudo adalah sekitar....N",
            'image_path' => "https://3.bp.blogspot.com/-7c3hY-jEwWM/W2lMRSsA54I/AAAAAAAACS0/YWal_xnsetEFJ26DCKmMdaw7RlkyuXQJgCLcBGAs/s1600/gbr283.png",
            'topic_id' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
