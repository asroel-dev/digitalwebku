<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategoriberita');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('isi_berita', 'like', '%' . $search . '%');
            });
        });
        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori',  function ($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        });
    }
}
