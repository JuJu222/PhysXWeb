<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fis10_topics')->insert([
            'topic' => 'Besaran dan Satuan',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Besaran dan Satuan',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Vektor',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Vektor',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Lurus',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Lurus',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Parabola',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Parabola',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Melingkar Beraturan',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Gerak Melingkar Beraturan',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Hukum Newton (Gerak)',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Hukum Newton (Gerak)',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Hukum Newton (Gravitasi)',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Hukum Newton (Gravitasi)',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Usaha dan Energi',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Usaha dan Energi',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Momentum dan Impuls',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Momentum dan Impuls',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Getaran Harmonis',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic' => 'Getaran Harmonis',
            'difficulty' => 'hard',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
