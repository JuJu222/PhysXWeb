<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Topik 1
        DB::table('fis10_option_mcq')->insert([
            'option' => "Ampere",
            'is_correct' => false,
            'question_id' => 1
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Sekon",
            'is_correct' => false,
            'question_id' => 1
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Meter",
            'is_correct' => false,
            'question_id' => 1
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Joule",
            'is_correct' => true,
            'question_id' => 1
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 2
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "Nm^-1",
            'question_id' => 3
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "cm",
            'question_id' => 4
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 5
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT^-1",
            'is_correct' => false,
            'question_id' => 6
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT^-3",
            'is_correct' => false,
            'question_id' => 6
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "ML^2T^-3",
            'is_correct' => true,
            'question_id' => 6
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "ML^2T^-2",
            'is_correct' => false,
            'question_id' => 6
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "luas dan volume",
            'question_id' => 7
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 8
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kilogram, Kelvin, Meter",
            'is_correct' => true,
            'question_id' => 9
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Meter, Sekon, Watt",
            'is_correct' => false,
            'question_id' => 9
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton, Kilogram, Kelvin",
            'is_correct' => false,
            'question_id' => 9
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton ,Meter, Sekon",
            'is_correct' => false,
            'question_id' => 9
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 10
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //End of Topik 1

        //Topik 2
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 11
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 12
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "sinus",
            'question_id' => 13
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60 m",
            'is_correct' => false,
            'question_id' => 14
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100 m",
            'is_correct' => true,
            'question_id' => 14
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "140 m",
            'is_correct' => false,
            'question_id' => 14
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 m",
            'is_correct' => false,
            'question_id' => 14
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "8 meter",
            'question_id' => 15
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 16
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 17
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 18
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 √2 km/jam",
            'is_correct' => false,
            'question_id' => 19
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 √3 km/jam",
            'is_correct' => false,
            'question_id' => 19
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 km/jam dan 25 √2 km/jam",
            'is_correct' => false,
            'question_id' => 19
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 km/jam",
            'is_correct' => true,
            'question_id' => 19
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 20
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //End of Topik 2

        //Topik 3
        DB::table('fis10_option_mcq')->insert([
            'option' => "jarak benda tidak berubah terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kedudukan benda berubah terhadap benda lain",
            'is_correct' => true,
            'question_id' => 21
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "jarak benda kadang berubah, kadang tetap terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kedudukan benda tetap terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "berubah beraturan",
            'question_id' => 22
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 23
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "80 km",
            'question_id' => 24
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90 sekon",
            'is_correct' => false,
            'question_id' => 25
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 sekon",
            'is_correct' => false,
            'question_id' => 25
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "250 sekon",
            'is_correct' => true,
            'question_id' => 25
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "180 sekon",
            'is_correct' => false,
            'question_id' => 25
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s",
            'is_correct' => true,
            'question_id' => 26
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s",
            'is_correct' => false,
            'question_id' => 26
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10 m/s",
            'is_correct' => false,
            'question_id' => 26
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 m/s",
            'is_correct' => false,
            'question_id' => 26
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "30 menit",
            'question_id' => 27
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 28
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60.50 m/s",
            'is_correct' => false,
            'question_id' => 29
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "65.60 m/s",
            'is_correct' => false,
            'question_id' => 29
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "56.25 m/s",
            'is_correct' => true,
            'question_id' => 29
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "53.25 m/s",
            'is_correct' => false,
            'question_id' => 29
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "9.875 meter",
            'question_id' => 30
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //End of Topik 3

        //Topik 4
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 31
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "kecepatan awal",
            'question_id' => 32
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "500 m",
            'is_correct' => false,
            'question_id' => 33
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "750 m",
            'is_correct' => false,
            'question_id' => 33
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1000 m",
            'is_correct' => true,
            'question_id' => 33
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1250m",
            'is_correct' => false,
            'question_id' => 33
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s arah 30 derajat",
            'is_correct' => false,
            'question_id' => 34
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s arah 45 derajat",
            'is_correct' => false,
            'question_id' => 34
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s arah 30 derajat",
            'is_correct' => false,
            'question_id' => 34
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s arah 0 derajat",
            'is_correct' => true,
            'question_id' => 34
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "1.02 sekon",
            'question_id' => 35
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "20 akar 3 m",
            'question_id' => 36
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 37
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 38
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1 sekon",
            'is_correct' => true,
            'question_id' => 39
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 sekon",
            'is_correct' => false,
            'question_id' => 39
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 sekon",
            'is_correct' => false,
            'question_id' => 39
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6 sekon",
            'is_correct' => false,
            'question_id' => 39
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "15 m/s",
            'is_correct' => true,
            'question_id' => 40
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "17 m/s",
            'is_correct' => false,
            'question_id' => 40
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "23 m/s",
            'is_correct' => false,
            'question_id' => 40
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16 m/s",
            'is_correct' => false,
            'question_id' => 40
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //End of Topik 4

        DB::table('fis10_option_mcq')->insert([
            'option' => "w/t^2",
            'is_correct' => false,
            'question_id' => 41
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "w/t",
            'is_correct' => false,
            'question_id' => 41
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "wt",
            'is_correct' => true,
            'question_id' => 41
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "wt^2",
            'is_correct' => false,
            'question_id' => 41
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 42
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 43
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "tetap",
            'question_id' => 44
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "resultan vektor",
            'question_id' => 45
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50 m",
            'is_correct' => false,
            'question_id' => 46
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90 m",
            'is_correct' => false,
            'question_id' => 46
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100 m",
            'is_correct' => false,
            'question_id' => 46
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 m",
            'is_correct' => true,
            'question_id' => 46
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 47
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2/3phi m/s",
            'question_id' => 48
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7 N",
            'is_correct' => false,
            'question_id' => 49
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 N",
            'is_correct' => false,
            'question_id' => 49
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 N",
            'is_correct' => true,
            'question_id' => 49
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9 N",
            'is_correct' => false,
            'question_id' => 49
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12 m/s",
            'is_correct' => true,
            'question_id' => 50
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16 m/s",
            'is_correct' => false,
            'question_id' => 50
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 m/s",
            'is_correct' => false,
            'question_id' => 50
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "18 m/s",
            'is_correct' => false,
            'question_id' => 50
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //Topik 6

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 51
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Atas",
            'is_correct' => false,
            'question_id' => 52
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kanan",
            'is_correct' => false,
            'question_id' => 52
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kiri",
            'is_correct' => true,
            'question_id' => 52
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Bawah",
            'is_correct' => false,
            'question_id' => 52
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => true,
            'question_id' => 53
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 53
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 53
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 53
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => true,
            'question_id' => 54
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 54
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 54
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 54
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "gesek",
            'is_correct' => false,
            'question_id' => 55
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat",
            'is_correct' => true,
            'question_id' => 55
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "inertia",
            'is_correct' => false,
            'question_id' => 55
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kecepatan",
            'is_correct' => false,
            'question_id' => 55
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 56
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 56
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => true,
            'question_id' => 56
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 56
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 57
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 58
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 59
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 60
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => true,
            'question_id' => 60
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 60
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 60
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //End  of topik 6 easy
        //Start topik 7 easy
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 61
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2m",
            'is_correct' => false,
            'question_id' => 62
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4m",
            'is_correct' => true,
            'question_id' => 62
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6m",
            'is_correct' => false,
            'question_id' => 62
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8m",
            'is_correct' => false,
            'question_id' => 62
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 63
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "4M",
            'is_correct' => false,
            'question_id' => 64
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16M",
            'is_correct' => false,
            'question_id' => 64
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "32M",
            'is_correct' => true,
            'question_id' => 64
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "64M",
            'is_correct' => false,
            'question_id' => 64
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 65
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 66
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "400N",
            'is_correct' => true,
            'question_id' => 67
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "500N",
            'is_correct' => false,
            'question_id' => 67
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "600N",
            'is_correct' => false,
            'question_id' => 67
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "700N",
            'is_correct' => false,
            'question_id' => 67
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3/2",
            'is_correct' => false,
            'question_id' => 68
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9/5",
            'is_correct' => true,
            'question_id' => 68
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5/6",
            'is_correct' => false,
            'question_id' => 68
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2/3",
            'is_correct' => false,
            'question_id' => 68
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,33 x 10^-11N",
            'is_correct' => true,
            'question_id' => 69
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT",
            'is_correct' => false,
            'question_id' => 70
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M^-1L^3T^-2",
            'is_correct' => true,
            'question_id' => 70
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M²L²T³",
            'is_correct' => false,
            'question_id' => 70
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M L T²",
            'is_correct' => false,
            'question_id' => 70
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //End of topik 7 easy
        //Start of topik 8 easy
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 71
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 72
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 73
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 74
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 75
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 76
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 77
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 78
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 79
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 80
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //end of topik 8 Easy
        //start of topik 9 Easy

        DB::table('fis10_option_mcq')->insert([
            'option' => "daya",
            'is_correct' => false,
            'question_id' => 81
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "energi",
            'is_correct' => false,
            'question_id' => 81
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "momentum",
            'is_correct' => false,
            'question_id' => 81
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "impuls",
            'is_correct' => true,
            'question_id' => 81
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Azwin",
            'is_correct' => false,
            'question_id' => 82
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Sandy",
            'is_correct' => true,
            'question_id' => 82
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Al",
            'is_correct' => false,
            'question_id' => 82
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Billy",
            'is_correct' => false,
            'question_id' => 82
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "2 N.s",
            'is_correct' => false,
            'question_id' => 83
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 N.s",
            'is_correct' => false,
            'question_id' => 83
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8 N.s",
            'is_correct' => true,
            'question_id' => 83
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "32 N.s",
            'is_correct' => false,
            'question_id' => 83
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Mengurangi gaya impulsif dari mobil",
            'is_correct' => true,
            'question_id' => 84
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Untuk menahan laju mobil",
            'is_correct' => false,
            'question_id' => 84
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Untuk meningkatkan kecepatan",
            'is_correct' => false,
            'question_id' => 84
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Meningkatkan gaya impulsif dari mobil",
            'is_correct' => false,
            'question_id' => 84
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "0",
            'is_correct' => false,
            'question_id' => 85
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2x lipat",
            'is_correct' => true,
            'question_id' => 85
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3x lipat",
            'is_correct' => false,
            'question_id' => 85
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4x lipat",
            'is_correct' => false,
            'question_id' => 85
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Hukum kekalan momentum",
            'is_correct' => true,
            'question_id' => 86
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Hukum kekalan energi kinetik",
            'is_correct' => false,
            'question_id' => 86
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Hukum kekalan energi mekanik",
            'is_correct' => false,
            'question_id' => 86
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Hukum kekalan energi potensial",
            'is_correct' => false,
            'question_id' => 86
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan lenting sempurna",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan tidak lenting sama sekali",
            'is_correct' => true,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan lenting sebagian",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan sentral",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan lenting sempurna",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan tidak lenting sama sekali",
            'is_correct' => true,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan lenting sebagian",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Tumbukan sentral",
            'is_correct' => false,
            'question_id' => 87
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "14 kgm/s",
            'is_correct' => true,
            'question_id' => 88
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16 kgm/s",
            'is_correct' => false,
            'question_id' => 88
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "18 kgm/s",
            'is_correct' => false,
            'question_id' => 88
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 kgm/s",
            'is_correct' => false,
            'question_id' => 88
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "-0,1",
            'is_correct' => false,
            'question_id' => 89
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-0,2",
            'is_correct' => false,
            'question_id' => 89
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-0,3",
            'is_correct' => false,
            'question_id' => 89
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-0,4",
            'is_correct' => true,
            'question_id' => 89
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "10,0m/s",
            'is_correct' => false,
            'question_id' => 90
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "11,0m/s",
            'is_correct' => false,
            'question_id' => 90
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12,0m/s",
            'is_correct' => true,
            'question_id' => 90
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "13,0m/s",
            'is_correct' => false,
            'question_id' => 90
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //end of topik 9 hard
        //start of topik 10 easy
        DB::table('fis10_option_mcq')->insert([
            'option' => "Frekuensi",
            'is_correct' => false,
            'question_id' => 91
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Periode",
            'is_correct' => false,
            'question_id' => 91
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Refleksi",
            'is_correct' => true,
            'question_id' => 91
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Simpangan",
            'is_correct' => false,
            'question_id' => 91
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "gerak pegas",
            'is_correct' => false,
            'question_id' => 92
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "gerak memantul",
            'is_correct' => false,
            'question_id' => 92
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "gerak bolak balik",
            'is_correct' => true,
            'question_id' => 92
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "gerak suka suka",
            'is_correct' => false,
            'question_id' => 92
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "T-R-P-R-T",
            'is_correct' => true,
            'question_id' => 93
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "P-R-P-R-T",
            'is_correct' => false,
            'question_id' => 93
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "R-P-P-R-T",
            'is_correct' => false,
            'question_id' => 93
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "T-R-T-R-P",
            'is_correct' => false,
            'question_id' => 93
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Q-P-R-P-R",
            'is_correct' => false,
            'question_id' => 94
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Q-R-Q-P-Q",
            'is_correct' => false,
            'question_id' => 94
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Q-R-Q-P-R",
            'is_correct' => false,
            'question_id' => 94
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "P-R-P-Q-P",
            'is_correct' => true,
            'question_id' => 94
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "1 Hz",
            'is_correct' => false,
            'question_id' => 95
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "15 Hz",
            'is_correct' => false,
            'question_id' => 95
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 Hz",
            'is_correct' => false,
            'question_id' => 95
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 Hz",
            'is_correct' => true,
            'question_id' => 95
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Gaya pembalik",
            'is_correct' => false,
            'question_id' => 96
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gaya pemulih",
            'is_correct' => true,
            'question_id' => 96
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gaya gesek",
            'is_correct' => false,
            'question_id' => 96
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gaya hantar",
            'is_correct' => false,
            'question_id' => 96
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Jumlah getaran",
            'is_correct' => false,
            'question_id' => 97
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Frekuensi",
            'is_correct' => false,
            'question_id' => 97
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Amplitudo",
            'is_correct' => true,
            'question_id' => 97
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Refleksi",
            'is_correct' => false,
            'question_id' => 97
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Pokok",
            'is_correct' => false,
            'question_id' => 98
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Skalar",
            'is_correct' => false,
            'question_id' => 98
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Vektor",
            'is_correct' => true,
            'question_id' => 98
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Mutlak",
            'is_correct' => false,
            'question_id' => 98
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "8",
            'is_correct' => true,
            'question_id' => 99
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9",
            'is_correct' => false,
            'question_id' => 99
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10",
            'is_correct' => false,
            'question_id' => 99
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "11",
            'is_correct' => false,
            'question_id' => 99
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gerak Melingkar",
            'is_correct' => false,
            'question_id' => 100
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gerak Parabola",
            'is_correct' => false,
            'question_id' => 100
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gerak Lurus Beraturan",
            'is_correct' => false,
            'question_id' => 100
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Gerak Harmonik Sederhana",
            'is_correct' => true,
            'question_id' => 100
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //end of topik 10 easy
        DB::table('fis10_option_mcq')->insert([
            'option' => "meter/volt",
            'is_correct' => false,
            'question_id' => 101
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton . Coulomb",
            'is_correct' => false,
            'question_id' => 101
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "volt . meter",
            'is_correct' => false,
            'question_id' => 101
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton/Coulomb",
            'is_correct' => true,
            'question_id' => 101
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "2,97 mm",
            'is_correct' => false,
            'question_id' => 102
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,47 mm",
            'is_correct' => true,
            'question_id' => 102
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,03 mm",
            'is_correct' => false,
            'question_id' => 102
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,97 mm",
            'is_correct' => false,
            'question_id' => 102
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 103
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 103
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 103
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 103
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5",
            'is_correct' => true,
            'question_id' => 103
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "13 N",
            'question_id' => 104
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "173 gram",
            'question_id' => 105
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6.95 mm",
            'question_id' => 106
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 107
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 108
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 109
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-25.6 derajat",
            'is_correct' => true,
            'question_id' => 110
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25.6 derajat",
            'is_correct' => false,
            'question_id' => 110
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-35.6 derajat",
            'is_correct' => false,
            'question_id' => 110
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35.6 derajat",
            'is_correct' => false,
            'question_id' => 110
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "10 N",
            'is_correct' => false,
            'question_id' => 111
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10 akar 3 N",
            'is_correct' => false,
            'question_id' => 111
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12 N",
            'is_correct' => false,
            'question_id' => 111
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 akar 3 N",
            'is_correct' => true,
            'question_id' => 111
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 derajat",
            'is_correct' => false,
            'question_id' => 112
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60 derajat",
            'is_correct' => false,
            'question_id' => 112
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 derajat",
            'is_correct' => true,
            'question_id' => 112
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "21- derajat",
            'is_correct' => false,
            'question_id' => 112
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_fitb')->insert([
            'answer' => "60 derajat",
            'question_id' => 113
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "10 N",
            'question_id' => 114
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 115
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 116
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 117
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 118
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8",
            'is_correct' => false,
            'question_id' => 119
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7",
            'is_correct' => false,
            'question_id' => 119
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6",
            'is_correct' => true,
            'question_id' => 119
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12",
            'is_correct' => false,
            'question_id' => 119
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "B+C+D = A",
            'is_correct' => false,
            'question_id' => 120
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "C+B+A = D",
            'is_correct' => false,
            'question_id' => 120
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "C+D+A = B",
            'is_correct' => false,
            'question_id' => 120
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "A+B+D = C",
            'is_correct' => true,
            'question_id' => 120
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s",
            'is_correct' => false,
            'question_id' => 121
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s",
            'is_correct' => true,
            'question_id' => 121
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s",
            'is_correct' => false,
            'question_id' => 121
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s",
            'is_correct' => false,
            'question_id' => 121
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "31,22 m/s",
            'is_correct' => false,
            'question_id' => 122
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "36,55 m/s",
            'is_correct' => false,
            'question_id' => 122
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "39,54 m/s",
            'is_correct' => false,
            'question_id' => 122
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "41,65 m/s",
            'is_correct' => true,
            'question_id' => 122
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "25 km",
            'is_correct' => false,
            'question_id' => 123
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "28 km",
            'is_correct' => false,
            'question_id' => 123
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35 km",
            'is_correct' => true,
            'question_id' => 123
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "24 km",
            'is_correct' => false,
            'question_id' => 123
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "818 detik",
            'question_id' => 124
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "30 km",
            'question_id' => 125
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "240 m",
            'question_id' => 126
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 127
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 128
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 129
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "akar 3 sekon",
            'question_id' => 130
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2.4 meter",
            'question_id' => 131
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0.3 detik",
            'question_id' => 132
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2000 m",
            'question_id' => 133
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 134
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 135
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 136
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "745 km/jam",
            'is_correct' => false,
            'question_id' => 137
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "420 km/jam",
            'is_correct' => false,
            'question_id' => 137
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "360 km/jam",
            'is_correct' => false,
            'question_id' => 137
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "348 km/jam",
            'is_correct' => true,
            'question_id' => 137
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 10 m/s dan h = 30 m",
            'is_correct' => false,
            'question_id' => 138
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 30 m/s dan h = 30 m",
            'is_correct' => false,
            'question_id' => 138
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 50 m/s dan h = 10 m",
            'is_correct' => false,
            'question_id' => 138
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 10 m/s dan h = 50 m",
            'is_correct' => true,
            'question_id' => 138
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "(-1,1)",
            'question_id' => 139
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik terjauh dan titik terdangkal",
            'is_correct' => false,
            'question_id' => 140
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik tertinggi dan titik terjauh",
            'is_correct' => true,
            'question_id' => 140
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik tertinggi dan titik terdepan",
            'is_correct' => false,
            'question_id' => 140
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik terjauh dan titik tertinggi",
            'is_correct' => false,
            'question_id' => 140
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 s dan 2π m.s-1",
            'is_correct' => true,
            'question_id' => 141
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 s dan 0,2π m.s-1",
            'is_correct' => false,
            'question_id' => 141
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 s dan 5π m.s-1",
            'is_correct' => false,
            'question_id' => 141
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 s dan 10π m.s-1",
            'is_correct' => false,
            'question_id' => 141
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "periode dan jari-jari lintasan",
            'question_id' => 142
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 143
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 144
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "5 rad/s",
            'question_id' => 145
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0.14 sekon",
            'question_id' => 146
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "15 putaran",
            'is_correct' => false,
            'question_id' => 147
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 putaran",
            'is_correct' => false,
            'question_id' => 147
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35 putaran",
            'is_correct' => false,
            'question_id' => 147
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 putaran",
            'is_correct' => true,
            'question_id' => 147
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "3 sekon",
            'is_correct' => true,
            'question_id' => 148
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1 sekon",
            'is_correct' => false,
            'question_id' => 148
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,8 sekon",
            'is_correct' => false,
            'question_id' => 148
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,6 sekon",
            'is_correct' => false,
            'question_id' => 148
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 149
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "3,33 Hz",
            'question_id' => 150
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //Hard Topik 6

        DB::table('fis10_option_fitb')->insert([
            'answer' => "12,5 kg",
            'question_id' => 151
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "70",
            'is_correct' => false,
            'question_id' => 152
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "80",
            'is_correct' => false,
            'question_id' => 152
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90",
            'is_correct' => false,
            'question_id' => 152
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100",
            'is_correct' => true,
            'question_id' => 152
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "50 N",
            'question_id' => 153
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30√3 N dan 30 N",
            'is_correct' => false,
            'question_id' => 154
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "40√3 N dan 40 N",
            'is_correct' => false,
            'question_id' => 154
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50√3 N dan 50 N",
            'is_correct' => true,
            'question_id' => 154
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60√3 N dan 60 N",
            'is_correct' => false,
            'question_id' => 154
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2000 kg",
            'question_id' => 155
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1 m/s2",
            'is_correct' => false,
            'question_id' => 156
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s2",
            'is_correct' => false,
            'question_id' => 156
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s2",
            'is_correct' => true,
            'question_id' => 156
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s2",
            'is_correct' => false,
            'question_id' => 156
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "60 N",
            'question_id' => 157
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "160 N",
            'question_id' => 158
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s2",
            'is_correct' => false,
            'question_id' => 159
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s2",
            'is_correct' => false,
            'question_id' => 159
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s2",
            'is_correct' => false,
            'question_id' => 159
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s2",
            'is_correct' => true,
            'question_id' => 159
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 160
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //End of topik 6 hard
        //Start of topik 7 hard
        DB::table('fis10_option_mcq')->insert([
            'option' => "massa benda tetap",
            'is_correct' => true,
            'question_id' => 161
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda tetap",
            'is_correct' => false,
            'question_id' => 161
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda menjadi setengah semula",
            'is_correct' => false,
            'question_id' => 161
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda menjadi dua kali semula",
            'is_correct' => false,
            'question_id' => 161
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0,15 R",
            'question_id' => 162
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/4R",
            'is_correct' => false,
            'question_id' => 163
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/2R",
            'is_correct' => true,
            'question_id' => 163
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/R",
            'is_correct' => false,
            'question_id' => 163
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2GMM/R",
            'is_correct' => false,
            'question_id' => 163
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.547 x 10^11m",
            'is_correct' => true,
            'question_id' => 164
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.647 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.747 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.447 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3√19",
            'is_correct' => false,
            'question_id' => 165
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4√19",
            'is_correct' => false,
            'question_id' => 165
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5√19",
            'is_correct' => true,
            'question_id' => 165
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_mcq')->insert([
            'option' => "6√19",
            'is_correct' => false,
            'question_id' => 165
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        DB::table('fis10_option_mcq')->insert([
            'option' => "8√2",
            'is_correct' => false,
            'question_id' => 166
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9√2",
            'is_correct' => false,
            'question_id' => 166
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10√2",
            'is_correct' => true,
            'question_id' => 166
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7√2",
            'is_correct' => false,
            'question_id' => 166
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 167
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => true,
            'question_id' => 167
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 167
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 167
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3,33√2 x 10^-11",
            'is_correct' => true,
            'question_id' => 168
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,25GN",
            'is_correct' => false,
            'question_id' => 169
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,25GN",
            'is_correct' => true,
            'question_id' => 169
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4,25GN",
            'is_correct' => false,
            'question_id' => 169
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5,25GN",
            'is_correct' => false,
            'question_id' => 169
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^3kg^-1s^-2",
            'is_correct' => true,
            'question_id' => 170
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^2kg^-1s^-3",
            'is_correct' => false,
            'question_id' => 170
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^1kg^-3s^-2",
            'is_correct' => false,
            'question_id' => 170
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^2kg^-3s^-1",
            'is_correct' => false,
            'question_id' => 170
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //topik 8 hard
        DB::table('fis10_option_mcq')->insert([
            'option' => "100J",
            'is_correct' => false,
            'question_id' => 171
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "150J",
            'is_correct' => false,
            'question_id' => 171
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "200J",
            'is_correct' => false,
            'question_id' => 171
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "250J",
            'is_correct' => true,
            'question_id' => 171
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "180 derajat",
            'is_correct' => false,
            'question_id' => 172
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0 derajat",
            'is_correct' => false,
            'question_id' => 172
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 derajat",
            'is_correct' => false,
            'question_id' => 172
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90 derajat",
            'is_correct' => true,
            'question_id' => 172
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "30",
            'is_correct' => false,
            'question_id' => 173
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50",
            'is_correct' => false,
            'question_id' => 173
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "40",
            'is_correct' => true,
            'question_id' => 173
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60",
            'is_correct' => false,
            'question_id' => 173
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "naik 50 joule",
            'is_correct' => false,
            'question_id' => 174
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "turun 50 joule",
            'is_correct' => false,
            'question_id' => 174
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "naik 150 joule",
            'is_correct' => false,
            'question_id' => 174
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "turun 150 joule",
            'is_correct' => true,
            'question_id' => 174
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "0,225N/m",
            'is_correct' => false,
            'question_id' => 175
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,25N/m",
            'is_correct' => true,
            'question_id' => 175
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "22,5N/m",
            'is_correct' => false,
            'question_id' => 175
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "225N/m",
            'is_correct' => false,
            'question_id' => 175
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "10 J",
            'is_correct' => false,
            'question_id' => 176
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "15 J",
            'is_correct' => true,
            'question_id' => 176
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 J",
            'is_correct' => false,
            'question_id' => 176
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 J",
            'is_correct' => false,
            'question_id' => 176
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_fitb')->insert([
            'answer' => "0",
            'question_id' => 177
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "180",
            'question_id' => 178
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "potensial menjadi kinetik",
            'is_correct' => true,
            'question_id' => 179
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kinetik menjadi potensial",
            'is_correct' => false,
            'question_id' => 179
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kinetik menjadi kalor",
            'is_correct' => false,
            'question_id' => 179
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kinetik menjadi listrik",
            'is_correct' => false,
            'question_id' => 179
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1:20",
            'is_correct' => false,
            'question_id' => 180
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20:1",
            'is_correct' => false,
            'question_id' => 180
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1:40",
            'is_correct' => false,
            'question_id' => 180
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "40:1",
            'is_correct' => true,
            'question_id' => 180
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
        //topik 8 hard end

        DB::table('fis10_option_mcq')->insert([
            'option' => "240N",
            'is_correct' => false,
            'question_id' => 181
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "250N",
            'is_correct' => true,
            'question_id' => 181
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "260N",
            'is_correct' => false,
            'question_id' => 181
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "270N",
            'is_correct' => false,
            'question_id' => 181
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_fitb')->insert([
            'answer' => "0,25",
            'question_id' => 182
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "800",
            'question_id' => 183
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "50",
            'question_id' => 184
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4N",
            'is_correct' => false,
            'question_id' => 185
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6N",
            'is_correct' => false,
            'question_id' => 185
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8N",
            'is_correct' => false,
            'question_id' => 185
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10N",
            'is_correct' => true,
            'question_id' => 185
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5p",
            'is_correct' => false,
            'question_id' => 186
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "p",
            'is_correct' => false,
            'question_id' => 186
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2p",
            'is_correct' => false,
            'question_id' => 186
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4p",
            'is_correct' => true,
            'question_id' => 186
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "v1’ = -20 m/s dan v2’ = 20 m/s",
            'is_correct' => false,
            'question_id' => 187
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v1’ = -20 m/s dan v2’ = 10 m/s",
            'is_correct' => true,
            'question_id' => 187
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v1’ = -10 m/s dan v2’ = 20 m/s",
            'is_correct' => false,
            'question_id' => 187
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v1’ = -10 m/s dan v2’ = 10 m/s",
            'is_correct' => false,
            'question_id' => 187
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Nol dan 4 m/s",
            'is_correct' => true,
            'question_id' => 188
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s dan 4 m/s",
            'is_correct' => false,
            'question_id' => 188
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-2 m/s dan 6 m/s",
            'is_correct' => false,
            'question_id' => 188
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s dan 8 m/s",
            'is_correct' => false,
            'question_id' => 188
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "8,8 km/jam",
            'is_correct' => false,
            'question_id' => 189
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16,2 km/jam",
            'is_correct' => true,
            'question_id' => 189
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "21,2 km/jam",
            'is_correct' => false,
            'question_id' => 189
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "34,4 km/jam",
            'is_correct' => false,
            'question_id' => 189
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "101m/s",
            'is_correct' => false,
            'question_id' => 190
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "201m/s",
            'is_correct' => false,
            'question_id' => 190
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "202m/s",
            'is_correct' => true,
            'question_id' => 190
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1301m/s",
            'is_correct' => false,
            'question_id' => 190
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        //Topik 10

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,990 s",
            'is_correct' => false,
            'question_id' => 191
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,991 s",
            'is_correct' => false,
            'question_id' => 191
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,992 s",
            'is_correct' => true,
            'question_id' => 191
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,993 s",
            'is_correct' => false,
            'question_id' => 191
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8/6",
            'is_correct' => false,
            'question_id' => 192
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9/8",
            'is_correct' => false,
            'question_id' => 192
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16/10",
            'is_correct' => false,
            'question_id' => 192
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7/5",
            'is_correct' => true,
            'question_id' => 192
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1/4A√15",
            'is_correct' => true,
            'question_id' => 193
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1/2A√15",
            'is_correct' => false,
            'question_id' => 193
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1/3A√15",
            'is_correct' => false,
            'question_id' => 193
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1/5A√15",
            'is_correct' => false,
            'question_id' => 193
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "√3",
            'is_correct' => false,
            'question_id' => 194
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,1√3",
            'is_correct' => false,
            'question_id' => 194
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,2√3",
            'is_correct' => false,
            'question_id' => 194
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,3√3",
            'is_correct' => true,
            'question_id' => 194
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "periode A = 4 periode B",
            'is_correct' => false,
            'question_id' => 195
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "periode A = ¼ kali periode B",
            'is_correct' => false,
            'question_id' => 195
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "periode A = periode B",
            'is_correct' => true,
            'question_id' => 195
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "periode A = 2 kali periode B",
            'is_correct' => false,
            'question_id' => 195
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m",
            'is_correct' => true,
            'question_id' => 196
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "π m",
            'is_correct' => false,
            'question_id' => 196
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "π/2 m",
            'is_correct' => false,
            'question_id' => 196
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "π/4 m",
            'is_correct' => false,
            'question_id' => 196
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "y = 1/2.√3 . A",
            'is_correct' => true,
            'question_id' => 197
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "y = 1/3.√3 . A",
            'is_correct' => false,
            'question_id' => 197
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "y = 4/9.√3 . A",
            'is_correct' => false,
            'question_id' => 197
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "y = 9/4.√3 . A",
            'is_correct' => false,
            'question_id' => 197
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "25 cm",
            'is_correct' => false,
            'question_id' => 198
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 cm",
            'is_correct' => false,
            'question_id' => 198
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50 cm",
            'is_correct' => true,
            'question_id' => 198
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "65 cm",
            'is_correct' => false,
            'question_id' => 198
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "333,33 N/m",
            'is_correct' => true,
            'question_id' => 199
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "325,3 N/m",
            'is_correct' => false,
            'question_id' => 199
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "234,23 N/m",
            'is_correct' => false,
            'question_id' => 199
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "234,4 N/m",
            'is_correct' => false,
            'question_id' => 199
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "1,0",
            'is_correct' => false,
            'question_id' => 200
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,46",
            'is_correct' => true,
            'question_id' => 200
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4,80",
            'is_correct' => false,
            'question_id' => 200
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6,94",
            'is_correct' => false,
            'question_id' => 200
            , 'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()]);
    }
}
