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

    public function title() {
        return $this->hasOne(Fis10User::class, 'title', 'shop_item_id');
    }

    public function avatar() {
        return $this->hasOne(Fis10User::class, 'avatar', 'shop_item_id');
    }
}
