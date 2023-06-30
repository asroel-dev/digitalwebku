<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = "dokumen";
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    }
}
