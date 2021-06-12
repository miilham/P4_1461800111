<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;
    protected $table="rak_buku";

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id');
    }

    public function jenisbuku()
    {
        return $this->belongsTo(Jenis_buku::class, 'id_jenis_buku', 'id');
    }

}
