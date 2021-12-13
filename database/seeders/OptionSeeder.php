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
        //Question 1
        DB::table('fis10_option_mcq')->insert([
            'option_mcq_id' => 1,
            'option' => "9.69 m/s",
            'is_correct' => false,
            'question_id' => 1
        ]);  

        DB::table('fis10_option_mcq')->insert([
            'option_mcq_id' => 2,
            'option' => "9.68 m/s",
            'is_correct' => false,
            'question_id' => 1
        ]); 

        DB::table('fis10_option_mcq')->insert([
            'option_mcq_id' => 3,
            'option' => "9.80 m/s",
            'is_correct' => true,
            'question_id' => 1
        ]);

        DB::table('fis10_option_mcq')->insert([
            'option_mcq_id' => 4,
            'option' => "9.90 m/s",
            'is_correct' => false,
            'question_id' => 1
        ]);


        //Question 2
        DB::table('fis10_option_fitb')->insert([
            'option_fitb_id' => 1,
            'answer' => "v/t",
            'question_id' => 2
        ]);

        //Question 3
        DB::table('fis10_option_tof')->insert([
            'option_tof_id' => 1,
            'true_or_false' => true,
            'question_id' => 2
        ]);
    }
}