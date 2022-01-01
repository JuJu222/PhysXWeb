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
        DB::table('fis10_questions')->insert([
            'question_type' => "mcq",
            'score' => 50,
            'question' => "Energi kinetik (Ek) dinyatakan oleh Ek =12\begin{aligned}\frac{1}{2}\end{aligned}21​​mv2. Dimensi energi kinetik adalah ...",
            'image_path' => "1640104700.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_type' => "tof",
            'score' => 50,
            'question' => "Besaran yang dimensinya MLT-2 adalah ....",
            'image_path' => "soal3.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_type' => "fitb",
            'score' => 50,
            'question' => "Besar gaya elastis sebuah pegas dinyatakan oleh F = kx, dengan k adalah konstansta pegas dan x adalah perubahan panjang pegas. Dimensi konstanta adalah ....",
            'image_path' => "soal3.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
