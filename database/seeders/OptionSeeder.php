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
        
        // //Question 1
        // DB::table('fis10_option_mcq')->insert([
        //     'option_mcq_id' => 1,
        //     'option' => "9.69 m/s",
        //     'is_correct' => false,
        //     'question_id' => 1
        // ]);

        // //Question 2
        // DB::table('fis10_option_tof')->insert([
        //     'true_or_false' => true,
        //     'question_id' => 2
        // ]);

        // //Question 3
        // DB::table('fis10_option_fitb')->insert([
        //     'option_fitb_id' => 1,
        //     'answer' => "v/t",
        //     'question_id' => 3
        // ]);

        //Topik 1
        DB::table('fis10_option_mcq')->insert([
            'option' => "Ampere",
            'is_correct' => false,
            'question_id' => 1
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Sekon",
            'is_correct' => false,
            'question_id' => 1
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Meter",
            'is_correct' => false,
            'question_id' => 1
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Joule",
            'is_correct' => true,
            'question_id' => 1
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 2
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "Nm^-1",
            'question_id' => 3
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "cm",
            'question_id' => 4
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 5
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT^-1",
            'is_correct' => false,
            'question_id' => 6
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT^-3",
            'is_correct' => false,
            'question_id' => 6
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "ML^2T^-3",
            'is_correct' => true,
            'question_id' => 6
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "ML^2T^-2",
            'is_correct' => false,
            'question_id' => 6
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "luas dan volume",
            'question_id' => 7
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 8
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kilogram, Kelvin, Meter",
            'is_correct' => true,
            'question_id' => 9
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Meter, Sekon, Watt",
            'is_correct' => false,
            'question_id' => 9
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton, Kilogram, Kelvin",
            'is_correct' => false,
            'question_id' => 9
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton ,Meter, Sekon",
            'is_correct' => false,
            'question_id' => 9
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 10
        ]);
        //End of Topik 1

        //Topik 2
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 11
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 12
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "sinus",
            'question_id' => 13
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60 m",
            'is_correct' => false,
            'question_id' => 14
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100 m",
            'is_correct' => true,
            'question_id' => 14
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "140 m",
            'is_correct' => false,
            'question_id' => 14
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 m",
            'is_correct' => false,
            'question_id' => 14
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "8 meter",
            'question_id' => 15
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 16
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 17
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 18
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 √2 km/jam",
            'is_correct' => false,
            'question_id' => 19
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 √3 km/jam",
            'is_correct' => false,
            'question_id' => 19
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 km/jam dan 25 √2 km/jam",
            'is_correct' => false,
            'question_id' => 19
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 √3 km/jam dan 25 km/jam",
            'is_correct' => true,
            'question_id' => 19
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 20
        ]);
        //End of Topik 2

        //Topik 3
        DB::table('fis10_option_mcq')->insert([
            'option' => "jarak benda tidak berubah terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kedudukan benda berubah terhadap benda lain",
            'is_correct' => true,
            'question_id' => 21
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "jarak benda kadang berubah, kadang tetap terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kedudukan benda tetap terhadap benda lain",
            'is_correct' => false,
            'question_id' => 21
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "berubah beraturan",
            'question_id' => 22
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 23
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "80 km",
            'question_id' => 24
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90 sekon",
            'is_correct' => false,
            'question_id' => 25
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 sekon",
            'is_correct' => false,
            'question_id' => 25
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "250 sekon",
            'is_correct' => true,
            'question_id' => 25
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "180 sekon",
            'is_correct' => false,
            'question_id' => 25
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s",
            'is_correct' => true,
            'question_id' => 26
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s",
            'is_correct' => false,
            'question_id' => 26
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "10 m/s",
            'is_correct' => false,
            'question_id' => 26
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 m/s",
            'is_correct' => false,
            'question_id' => 26
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "30 menit",
            'question_id' => 27
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 28
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60.50 m/s",
            'is_correct' => false,
            'question_id' => 29
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "65.60 m/s",
            'is_correct' => false,
            'question_id' => 29
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "56.25 m/s",
            'is_correct' => true,
            'question_id' => 29
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "53.25 m/s",
            'is_correct' => false,
            'question_id' => 29
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "9.875 meter",
            'question_id' => 30
        ]);
        //End of Topik 3

        //Topik 4
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 31
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "kecepatan awal",
            'question_id' => 32
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "500 m",
            'is_correct' => false,
            'question_id' => 33
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "750 m",
            'is_correct' => false,
            'question_id' => 33
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1000 m",
            'is_correct' => true,
            'question_id' => 33
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1250m",
            'is_correct' => false,
            'question_id' => 33
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s arah 30 derajat",
            'is_correct' => false,
            'question_id' => 34
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s arah 45 derajat",
            'is_correct' => false,
            'question_id' => 34
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s arah 30 derajat",
            'is_correct' => false,
            'question_id' => 34
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s arah 0 derajat",
            'is_correct' => true,
            'question_id' => 34
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "1.02 sekon",
            'question_id' => 35
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "20 akar 3 m",
            'question_id' => 36
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 37
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 38
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1 sekon",
            'is_correct' => true,
            'question_id' => 39
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 sekon",
            'is_correct' => false,
            'question_id' => 39
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 sekon",
            'is_correct' => false,
            'question_id' => 39
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6 sekon",
            'is_correct' => false,
            'question_id' => 39
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "15 m/s",
            'is_correct' => true,
            'question_id' => 40
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "17 m/s",
            'is_correct' => false,
            'question_id' => 40
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "23 m/s",
            'is_correct' => false,
            'question_id' => 40
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16 m/s",
            'is_correct' => false,
            'question_id' => 40
        ]);
        //End of Topik 4

        DB::table('fis10_option_mcq')->insert([
            'option' => "w/t^2",
            'is_correct' => false,
            'question_id' => 41
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "w/t",
            'is_correct' => false,
            'question_id' => 41
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "wt",
            'is_correct' => true,
            'question_id' => 41
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "wt^2",
            'is_correct' => false,
            'question_id' => 41
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 42
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 43
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "tetap",
            'question_id' => 44
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "resultan vektor",
            'question_id' => 45
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50 m",
            'is_correct' => false,
            'question_id' => 46
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90 m",
            'is_correct' => false,
            'question_id' => 46
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100 m",
            'is_correct' => false,
            'question_id' => 46
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 m",
            'is_correct' => true,
            'question_id' => 46
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 47
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2/3phi m/s",
            'question_id' => 48
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7 N",
            'is_correct' => false,
            'question_id' => 49
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 N",
            'is_correct' => false,
            'question_id' => 49
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 N",
            'is_correct' => true,
            'question_id' => 49
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9 N",
            'is_correct' => false,
            'question_id' => 49
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12 m/s",
            'is_correct' => true,
            'question_id' => 50
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16 m/s",
            'is_correct' => false,
            'question_id' => 50
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "20 m/s",
            'is_correct' => false,
            'question_id' => 50
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "18 m/s",
            'is_correct' => false,
            'question_id' => 50
        ]);

        //Topik 6

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 51
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Atas",
            'is_correct' => false,
            'question_id' => 52
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kanan",
            'is_correct' => false,
            'question_id' => 52
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Kiri",
            'is_correct' => true,
            'question_id' => 52
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Bawah",
            'is_correct' => false,
            'question_id' => 52
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => true,
            'question_id' => 53
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 53
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 53
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 53
        ]);
    
        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => true,
            'question_id' => 54
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 54
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 54
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 54
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "gesek",
            'is_correct' => false,
            'question_id' => 55
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat",
            'is_correct' => true,
            'question_id' => 55
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "inertia",
            'is_correct' => false,
            'question_id' => 55
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "kecepatan",
            'is_correct' => false,
            'question_id' => 55
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 56
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 56
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => true,
            'question_id' => 56
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 56
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 57
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 58
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 59
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 60
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => true,
            'question_id' => 60
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 60
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 60
        ]);

        //End  of topik 6 easy
        //Start topik 7 easy
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 61
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2m",
            'is_correct' => false,
            'question_id' => 62
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4m",
            'is_correct' => true,
            'question_id' => 62
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6m",
            'is_correct' => false,
            'question_id' => 62
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8m",
            'is_correct' => false,
            'question_id' => 62
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 63
        ]);

        
        DB::table('fis10_option_mcq')->insert([
            'option' => "4M",
            'is_correct' => false,
            'question_id' => 64
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "16M",
            'is_correct' => false,
            'question_id' => 64
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "32M",
            'is_correct' => true,
            'question_id' => 64
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "64M",
            'is_correct' => false,
            'question_id' => 64
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 65
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 66
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "400N",
            'is_correct' => true,
            'question_id' => 67
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "500N",
            'is_correct' => false,
            'question_id' => 67
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "600N",
            'is_correct' => false,
            'question_id' => 67
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "700N",
            'is_correct' => false,
            'question_id' => 67
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3/2",
            'is_correct' => false,
            'question_id' => 68
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9/5",
            'is_correct' => true,
            'question_id' => 68
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5/6",
            'is_correct' => false,
            'question_id' => 68
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2/3",
            'is_correct' => false,
            'question_id' => 68
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,33 x 10^-11N",
            'is_correct' => true,
            'question_id' => 69
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4,33 x 10^-11N",
            'is_correct' => false,
            'question_id' => 69
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "MLT",
            'is_correct' => false,
            'question_id' => 70
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M^-1L^3T^-2",
            'is_correct' => true,
            'question_id' => 70
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M²L²T³",
            'is_correct' => false,
            'question_id' => 70
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "M L T²",
            'is_correct' => false,
            'question_id' => 70
        ]);

        //End of topik 7 easy
        //Start of topik 8 easy
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 71
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 72
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 73
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 74
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 75
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 76
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 77
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 78
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 79
        ]);
        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 80
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "meter/volt",
            'is_correct' => false,
            'question_id' => 101
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton . Coulomb",
            'is_correct' => false,
            'question_id' => 101
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "volt . meter",
            'is_correct' => false,
            'question_id' => 101
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Newton/Coulomb",
            'is_correct' => true,
            'question_id' => 101
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "2,97 mm",
            'is_correct' => false,
            'question_id' => 102
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,47 mm",
            'is_correct' => true,
            'question_id' => 102
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "2,03 mm",
            'is_correct' => false,
            'question_id' => 102
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,97 mm",
            'is_correct' => false,
            'question_id' => 102
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 103
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => false,
            'question_id' => 103
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 103
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 103
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5",
            'is_correct' => true,
            'question_id' => 103
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "13 N",
            'question_id' => 104
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "173 gram",
            'question_id' => 105
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6.95 mm",
            'question_id' => 106
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 107
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 108
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 109
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-25.6 derajat",
            'is_correct' => true,
            'question_id' => 110
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "25.6 derajat",
            'is_correct' => false,
            'question_id' => 110
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "-35.6 derajat",
            'is_correct' => false,
            'question_id' => 110
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35.6 derajat",
            'is_correct' => false,
            'question_id' => 110
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "10 N",
            'is_correct' => false,
            'question_id' => 111
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "10 akar 3 N",
            'is_correct' => false,
            'question_id' => 111
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12 N",
            'is_correct' => false,
            'question_id' => 111
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 akar 3 N",
            'is_correct' => true,
            'question_id' => 111
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30 derajat",
            'is_correct' => false,
            'question_id' => 112
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "60 derajat",
            'is_correct' => false,
            'question_id' => 112
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "120 derajat",
            'is_correct' => true,
            'question_id' => 112
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "21- derajat",
            'is_correct' => false,
            'question_id' => 112
        ]);


        DB::table('fis10_option_fitb')->insert([
            'answer' => "60 derajat",
            'question_id' => 113
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "10 N",
            'question_id' => 114
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 115
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 116
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 117
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 118
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "8",
            'is_correct' => false,
            'question_id' => 119
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "7",
            'is_correct' => false,
            'question_id' => 119
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "6",
            'is_correct' => true,
            'question_id' => 119
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "12",
            'is_correct' => false,
            'question_id' => 119
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "B+C+D = A",
            'is_correct' => false,
            'question_id' => 120
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "C+B+A = D",
            'is_correct' => false,
            'question_id' => 120
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "C+D+A = B",
            'is_correct' => false,
            'question_id' => 120
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "A+B+D = C",
            'is_correct' => true,
            'question_id' => 120
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s",
            'is_correct' => false,
            'question_id' => 121
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s",
            'is_correct' => true,
            'question_id' => 121
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s",
            'is_correct' => false,
            'question_id' => 121
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s",
            'is_correct' => false,
            'question_id' => 121
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "31,22 m/s",
            'is_correct' => false,
            'question_id' => 122
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "36,55 m/s",
            'is_correct' => false,
            'question_id' => 122
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "39,54 m/s",
            'is_correct' => false,
            'question_id' => 122
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "41,65 m/s",
            'is_correct' => true,
            'question_id' => 122
        ]);
        

        DB::table('fis10_option_mcq')->insert([
            'option' => "25 km",
            'is_correct' => false,
            'question_id' => 123
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "28 km",
            'is_correct' => false,
            'question_id' => 123
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35 km",
            'is_correct' => true,
            'question_id' => 123
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "24 km",
            'is_correct' => false,
            'question_id' => 123
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "818 detik",
            'question_id' => 124
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "30 km",
            'question_id' => 125
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "240 m",
            'question_id' => 126
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 127
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 128
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 129
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "akar 3 sekon",
            'question_id' => 130
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2.4 meter",
            'question_id' => 131
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0.3 detik",
            'question_id' => 132
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2000 m",
            'question_id' => 133
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 134
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 135
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => false,
            'question_id' => 136
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "745 km/jam",
            'is_correct' => false,
            'question_id' => 137
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "420 km/jam",
            'is_correct' => false,
            'question_id' => 137
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "360 km/jam",
            'is_correct' => false,
            'question_id' => 137
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "348 km/jam",
            'is_correct' => true,
            'question_id' => 137
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 10 m/s dan h = 30 m",
            'is_correct' => false,
            'question_id' => 138
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 30 m/s dan h = 30 m",
            'is_correct' => false,
            'question_id' => 138
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 50 m/s dan h = 10 m",
            'is_correct' => false,
            'question_id' => 138
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "v = 10 m/s dan h = 50 m",
            'is_correct' => true,
            'question_id' => 138
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "(-1,1)",
            'question_id' => 139
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik terjauh dan titik terdangkal",
            'is_correct' => false,
            'question_id' => 140
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik tertinggi dan titik terjauh",
            'is_correct' => true,
            'question_id' => 140
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik tertinggi dan titik terdepan",
            'is_correct' => false,
            'question_id' => 140
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "Titik terjauh dan titik tertinggi",
            'is_correct' => false,
            'question_id' => 140
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 s dan 2π m.s-1",
            'is_correct' => true,
            'question_id' => 141
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "0,5 s dan 0,2π m.s-1",
            'is_correct' => false,
            'question_id' => 141
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 s dan 5π m.s-1",
            'is_correct' => false,
            'question_id' => 141
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 s dan 10π m.s-1",
            'is_correct' => false,
            'question_id' => 141
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "periode dan jari-jari lintasan",
            'question_id' => 142
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 143
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 144
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "5 rad/s",
            'question_id' => 145
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0.14 sekon",
            'question_id' => 146
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "15 putaran",
            'is_correct' => false,
            'question_id' => 147
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "20 putaran",
            'is_correct' => false,
            'question_id' => 147
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "35 putaran",
            'is_correct' => false,
            'question_id' => 147
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 putaran",
            'is_correct' => true,
            'question_id' => 147
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "3 sekon",
            'is_correct' => true,
            'question_id' => 148
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "1 sekon",
            'is_correct' => false,
            'question_id' => 148
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,8 sekon",
            'is_correct' => false,
            'question_id' => 148
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0,6 sekon",
            'is_correct' => false,
            'question_id' => 148
        ]);

        DB::table('fis10_option_tof')->insert([
            'true_or_false' => true,
            'question_id' => 149
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "3,33 Hz",
            'question_id' => 150
        ]);

        //Hard Topik 6

        DB::table('fis10_option_fitb')->insert([
            'answer' => "12,5 kg",
            'question_id' => 151
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "70",
            'is_correct' => false,
            'question_id' => 152
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "80",
            'is_correct' => false,
            'question_id' => 152
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "90",
            'is_correct' => false,
            'question_id' => 152
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "100",
            'is_correct' => true,
            'question_id' => 152
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "50 N",
            'question_id' => 153
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "30√3 N dan 30 N",
            'is_correct' => false,
            'question_id' => 154
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "40√3 N dan 40 N",
            'is_correct' => false,
            'question_id' => 154
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50√3 N dan 50 N",
            'is_correct' => true,
            'question_id' => 154
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "60√3 N dan 60 N",
            'is_correct' => false,
            'question_id' => 154
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "2000 kg",
            'question_id' => 155
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1 m/s2",
            'is_correct' => false,
            'question_id' => 156
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s2",
            'is_correct' => false,
            'question_id' => 156
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s2",
            'is_correct' => true,
            'question_id' => 156
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s2",
            'is_correct' => false,
            'question_id' => 156
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "60 N",
            'question_id' => 157
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "160 N",
            'question_id' => 158
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2 m/s2",
            'is_correct' => false,
            'question_id' => 159
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "3 m/s2",
            'is_correct' => false,
            'question_id' => 159
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4 m/s2",
            'is_correct' => false,
            'question_id' => 159
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5 m/s2",
            'is_correct' => true,
            'question_id' => 159
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "6 N",
            'question_id' => 160
        ]);
        //End of topik 6 hard
        //Start of topik 7 hard
        DB::table('fis10_option_mcq')->insert([
            'option' => "massa benda tetap",
            'is_correct' => true,
            'question_id' => 161
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda tetap",
            'is_correct' => false,
            'question_id' => 161
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda menjadi setengah semula",
            'is_correct' => false,
            'question_id' => 161
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "berat benda menjadi dua kali semula",
            'is_correct' => false,
            'question_id' => 161
        ]);

        DB::table('fis10_option_fitb')->insert([
            'answer' => "0,15 R",
            'question_id' => 162
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/4R",
            'is_correct' => false,
            'question_id' => 163
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/2R",
            'is_correct' => true,
            'question_id' => 163
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "GMM/R",
            'is_correct' => false,
            'question_id' => 163
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2GMM/R",
            'is_correct' => false,
            'question_id' => 163
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.547 x 10^11m",
            'is_correct' => true,
            'question_id' => 164
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "7.647 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.747 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7.447 x 10^11m",
            'is_correct' => false,
            'question_id' => 164
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3√19",
            'is_correct' => false,
            'question_id' => 165
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "4√19",
            'is_correct' => false,
            'question_id' => 165
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "5√19",
            'is_correct' => true,
            'question_id' => 165
        ]);
        DB::table('fis10_option_mcq')->insert([
            'option' => "6√19",
            'is_correct' => false,
            'question_id' => 165
        ]);
        DB::table('fis10_option_mcq')->insert([
            'option' => "8√2",
            'is_correct' => false,
            'question_id' => 166
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "9√2",
            'is_correct' => false,
            'question_id' => 166
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "10√2",
            'is_correct' => true,
            'question_id' => 166
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "7√2",
            'is_correct' => false,
            'question_id' => 166
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1",
            'is_correct' => false,
            'question_id' => 167
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2",
            'is_correct' => true,
            'question_id' => 167
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "3",
            'is_correct' => false,
            'question_id' => 167
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4",
            'is_correct' => false,
            'question_id' => 167
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "3,33√2 x 10^-11",
            'is_correct' => true,
            'question_id' => 168
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "0,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,33√2 x 10^-11",
            'is_correct' => false,
            'question_id' => 168
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "1,25GN",
            'is_correct' => false,
            'question_id' => 169
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,25GN",
            'is_correct' => true,
            'question_id' => 169
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "4,25GN",
            'is_correct' => false,
            'question_id' => 169
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "5,25GN",
            'is_correct' => false,
            'question_id' => 169
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^3kg^-1s^-2",
            'is_correct' => true,
            'question_id' => 170
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^2kg^-1s^-3",
            'is_correct' => false,
            'question_id' => 170
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "m^1kg^-3s^-2",
            'is_correct' => false,
            'question_id' => 170
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "m^2kg^-3s^-1",
            'is_correct' => false,
            'question_id' => 170
        ]);
        //topik 8 hard
        DB::table('fis10_option_mcq')->insert([
            'option' => "100J",
            'is_correct' => false,
            'question_id' => 171
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "150J",
            'is_correct' => false,
            'question_id' => 171
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "200J",
            'is_correct' => false,
            'question_id' => 171
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "250J",
            'is_correct' => true,
            'question_id' => 171
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "180 derajat",
            'is_correct' => false,
            'question_id' => 172
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "0 derajat",
            'is_correct' => false,
            'question_id' => 172
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "45 derajat",
            'is_correct' => false,
            'question_id' => 172
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "90 derajat",
            'is_correct' => true,
            'question_id' => 172
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "30",
            'is_correct' => false,
            'question_id' => 173
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "50",
            'is_correct' => false,
            'question_id' => 173
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "40",
            'is_correct' => true,
            'question_id' => 173
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "60",
            'is_correct' => false,
            'question_id' => 173
        ]);



        DB::table('fis10_option_mcq')->insert([
            'option' => "naik 50 joule",
            'is_correct' => false,
            'question_id' => 174
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "turun 50 joule",
            'is_correct' => false,
            'question_id' => 174
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "naik 150 joule",
            'is_correct' => false,
            'question_id' => 174
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "turun 150 joule",
            'is_correct' => true,
            'question_id' => 174
        ]);


        DB::table('fis10_option_mcq')->insert([
            'option' => "0,225N/m",
            'is_correct' => false,
            'question_id' => 175
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "2,25N/m",
            'is_correct' => true,
            'question_id' => 175
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option' => "22,5N/m",
            'is_correct' => false,
            'question_id' => 175
        ]);
        
        DB::table('fis10_option_mcq')->insert([
            'option' => "225N/m",
            'is_correct' => false,
            'question_id' => 175
        ]);
    }
}
