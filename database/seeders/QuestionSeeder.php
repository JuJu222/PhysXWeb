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
        DB::table('questions')->insert([
            'question_id' => 1,
            'question_type' => "mcq",
            'question' => "Apa rumus dari g di gravitasi ?",
            'image_path' => "soal1.jpg",
            'topic_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('questions')->insert([
            'question_id' => 2,
            'question_type' => "fitb",
            'question' => "Apa rumus dari kecepatan ?",
            'image_path' => "soal2.jpg",
            'topic_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('questions')->insert([
            'question_id' => 3,
            'question_type' => "tof",
            'question' => "Lensa cembung adalah lensa yang digunakan untuk orang yang rabun jauh ?",
            'image_path' => "soal3.jpg",
            'topic_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
