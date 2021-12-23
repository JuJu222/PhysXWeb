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
            'question_id' => 1,
            'question_type' => "mcq",
            'question' => "Halo namamu siapa",
            'image_path' => "1640104700.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_questions')->insert([
            'question_id' => 2,
            'question_type' => "tof",
            'question' => "Lensa cembung adalah lensa yang digunakan untuk orang yang rabun jauh ?",
            'image_path' => "soal3.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
