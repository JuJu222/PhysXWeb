<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $primaryKey = 'log_id';
    protected $fillable = ['user_id','table','path','action', 'url', 'ip_address'];
    protected $table = 'fis10_logs';
}
