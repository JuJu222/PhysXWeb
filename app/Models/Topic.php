<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $primaryKey = 'topic_id';
    protected $fillable = ['topic_id','topic','difficulty'];
    protected $table = 'fis10_topics';

    public function questions(){
        return $this->hasMany(Topic::class, 'topic_id', 'question_id');
    }
}
