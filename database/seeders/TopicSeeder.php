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
            'topic_id' => 1,
            'topic_name' => 'Besaran Dan Satuan',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 2,
            'topic_name' => 'Vektor',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 3,
            'topic_name' => 'Gerak Lurus',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 4,
            'topic_name' => 'Gerak Parabola',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 5,
            'topic_name' => 'Gerak Melingkar Beraturan',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 6,
            'topic_name' => 'Hukum Newton (Gerak)',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 7,
            'topic_name' => 'Hukum Newton (Gravitasi)',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 8,
            'topic_name' => 'Usaha dan Energi',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('fis10_topics')->insert([
            'topic_id' => 9,
            'topic_name' => 'Momentum dan Impuls',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 10,
            'topic_name' => 'Getaran Harmonis',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 11,
            'topic_name' => 'Besaran Dan Satuan',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 12,
            'topic_name' => 'Vektor',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 13,
            'topic_name' => 'Gerak Lurus',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 14,
            'topic_name' => 'Gerak Parabola',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 15,
            'topic_name' => 'Gerak Melingkar Beraturan',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 16,
            'topic_name' => 'Hukum Newton (Gerak)',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 17,
            'topic_name' => 'Hukum Newton (Gravitasi)',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 18,
            'topic_name' => 'Usaha dan Energi',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('fis10_topics')->insert([
            'topic_id' => 19,
            'topic_name' => 'Momentum dan Impuls',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_topics')->insert([
            'topic_id' => 20,
            'topic_name' => 'Getaran Harmonis',
            'difficulty' => 'hard',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
