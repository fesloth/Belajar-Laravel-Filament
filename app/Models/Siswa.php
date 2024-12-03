<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    public function tujuan(): BelongsTo
    {
        return $this->belongsTo(Tujuan::class);
    }

    public function mapel_pilihan(): BelongsTo
    {
        return $this->belongsTo(MapelPilihan::class);
    }

    protected $table = 'siswa';
    protected $fillable = ['nis', 'name', 'tujuan_id', 'mapel_pilihan_id', 'jenis_kelamin'];
}
