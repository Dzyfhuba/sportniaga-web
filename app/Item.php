<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $fillable = ['file', 'club', 'type', 'year', 'gk', 'size', 'material', 'price'];
}
