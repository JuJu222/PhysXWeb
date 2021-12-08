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

    public function title() {
        return $this->belongsTo(ShopItem::class, 'title', 'shop_item_id');
    }

    public function avatar() {
        return $this->belongsTo(ShopItem::class, 'avatar', 'shop_item_id');
    }
}
