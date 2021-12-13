<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option_mcq extends Model
{
    use HasFactory;

    protected $table = 'fis10_option_mcq';
    protected $primaryKey = 'option_mcq_id';
    protected $guarded = ['option_mcq_id'];


    public function questionMCQ(){
        return $this->belongsTo(Question::class, 'question_id', 'option_mcq_id');
    }
}
