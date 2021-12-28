<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $primaryKey = 'topic_id';
    protected $fillable = ['topic_name','difficulty','description','topic_image'];
    protected $table = 'fis10_topics';

    public function questions(){
        return $this->hasMany(Topic::class, 'topic_id', 'question_id');
    }

    public function fis10Users(){
        return $this->belongsToMany(Fis10User::class, 'fis10_unlocked_topics', 'topic_id', 'fis10_user_id');
    }

    public function leaderboards(){
        return $this->hasMany(Leaderboard::class, 'id_topic', 'topic_id');
    }
}
