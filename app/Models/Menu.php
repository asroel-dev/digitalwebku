<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany('App\Models\MenuList');
    }
}
