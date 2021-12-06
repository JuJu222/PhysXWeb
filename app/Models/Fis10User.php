<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis10User extends Model
{
    use HasFactory;

    protected $table = 'fis10_users';
    protected $primaryKey = 'fis10_user_id';
    protected $fillable = ['user_id', 'coins', 'title', 'avater'];
}
