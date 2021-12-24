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

    public function fis10users(){
        return $this->belongsToMany(Fis10User::class, 'fis10_users_topics', 'topic_id', 'uid')->withPivot(['is_locked']);
    }
}
