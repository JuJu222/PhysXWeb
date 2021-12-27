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

    public function fis10User(){
        return $this->belongsToMany(Fis10User::class, 'fis10_owned_items','shop_item_id','fis10_user_id')->withPivot(['is_equipped']);
    }
}
