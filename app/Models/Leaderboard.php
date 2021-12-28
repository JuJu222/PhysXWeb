<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;
    protected $fillable = ['id_leaderboard','uid','id_topic','score'];
    public function fis10user(){
        return $this->belongsTo(Fis10User::class,'uid', 'fis10_user_id');
    }

    public function topic(){
        return $this->belongsTo(Topic::class, 'id_topic', 'topic_id');
    }
}
