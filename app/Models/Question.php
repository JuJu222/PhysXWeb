<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = "question_id";
    protected $table = 'questions';
    protected $fillable= ['question_id','question_type', 'question','image_path','topic_id'];


    public function topic(){
        return $this->belongsTo(Topic::class, 'topic_id', 'question_id');
    }

    public function optionMCQ(){
        return $this->hasMany(Option_mcq::class,'question_id','question_id');
    }

    public function optionFITB(){
        return $this->hasMany(Option_fitb::class,'question_id','question_id');
    }

    public function optionTOF(){
        return $this->hasMany(Option_tof::class,'question_id','question_id');
    }

    public function fis10users(){
        return $this->belongsToMany(Fis10User::class, 'fis10_users_questions','question_id','fis10_user_id');
    }











}
