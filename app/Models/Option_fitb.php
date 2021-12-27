<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option_fitb extends Model
{
    use HasFactory;


    protected $primaryKey = 'option_fitb_id';
    protected $table = 'fis10_option_fitb';
    protected $guarded = ['option_fitb_id'];
    public $timestamps = false;


    public function questionFITB(){
        return $this->belongsTo(Question::class, 'question_id', 'option_fitb_id');
    }
}
