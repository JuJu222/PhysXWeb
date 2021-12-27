<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlockedTopic extends Model
{
    use HasFactory;

    protected $primaryKey = 'unlocked_topic_id';
    protected $table = 'fis10_unlocked_topics';
}
