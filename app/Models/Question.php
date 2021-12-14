<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = "question_id";
    protected $table = 'questions';
    protected $fillable= ['question_id', 'question','image_path','topic_id'];


    public function topic(){
        return $this->belongsTo(Topic::class, 'topic_id', 'question_id');
    }

    public function optionMCQ(){
        return $this->hasMany(Option_mcq::class,'option_mcq_id','question_id');
    }

    public function optionFITB(){
        return $this->hasMany(Option_FITB::class,'option_fitb_id','question_id');
    }

    public function optionTOF(){
        return $this->hasMany(Option_TOF::class,'option_tof_id','question_id');
    }

    public function fis10users(){
        return $this->belongsToMany(Fis10User::class, 'usersquestions','question_id','fis10_user_id');
    }





    





}
