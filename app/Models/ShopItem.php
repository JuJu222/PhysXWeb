<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    use HasFactory;

    protected $table = 'fis10_shop_items';
    protected $primaryKey = 'shop_item_id';
    protected $fillable = ['item', 'type', 'image_path', 'price'];

    public function fis10UserTitle() {
        return $this->hasMany(Fis10User::class, 'title', 'shop_item_id');
    }

    public function fis10UserAvatar() {
        return $this->hasMany(Fis10User::class, 'avatar', 'shop_item_id');
    }
}
