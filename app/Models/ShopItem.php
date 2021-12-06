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
}
