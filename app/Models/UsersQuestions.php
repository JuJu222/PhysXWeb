<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersQuestions extends Model
{
    use HasFactory;

    protected $table= 'fis10_users_questions';
    protected $guarded = ['id'];
}
