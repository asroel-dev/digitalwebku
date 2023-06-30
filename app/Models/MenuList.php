<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuList extends Model
{
    use HasFactory;
    protected $table = "menu_list";
    protected $guarded = [];
    public $timestamps = false;
}
