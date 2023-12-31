<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriberita extends Model
{
    use HasFactory;
    protected $table = 'kategori_berita';
    protected $guarded = [];

    public function berita()
    {
        return $this->hasMany('App\Models\Berita');
    }
}
