<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis10User extends Model
{
    use HasFactory;

    protected $table = 'fis10_users';
    protected $primaryKey = 'fis10_user_id';
    protected $fillable = ['user_id', 'coins', 'title', 'avatar'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function shopItemTitle() {
        return $this->belongsTo(ShopItem::class, 'title', 'shop_item_id');
    }

    public function shopItemAvatar() {
        return $this->belongsTo(ShopItem::class, 'avatar', 'shop_item_id');
    }

    public function questions(){
        return $this->belongsToMany(Question::class, 'usersquestions','fis10_user_id','question_id')->withPivot(['answersoal','question_score','time_start','time_end']);
    }

    public function topics(){
        return $this->belongsToMany(Topic::class, 'fis10_users_topiks', 'uid', 'id_topik')->withPivot(['is_locked']);
    }
}
