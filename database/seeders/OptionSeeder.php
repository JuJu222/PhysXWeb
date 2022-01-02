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
    }
}
