<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option_tof extends Model
{
    use HasFactory;

    protected $primaryKey = 'option_tof_id';
    protected $table = 'fis10_option_tof';
    protected $guarded = ['option_tof_id'];


    public function questionTOF(){
        return $this->belongsTo(Question::class, 'question_id', 'option_tof_id');
    }
}
