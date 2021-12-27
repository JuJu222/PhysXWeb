<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnedItem extends Model
{
    use HasFactory;

    protected $table = 'fis10_owned_items';
    protected $primaryKey = 'owned_item_id';
}
