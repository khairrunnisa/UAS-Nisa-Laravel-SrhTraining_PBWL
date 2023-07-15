<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kursus extends Model
{
    use HasFactory;
    protected $table = "tb_kursus";
    protected $primaryKey = "kursus_id";
    protected $guarded = [];

    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class, 'kursus_id_sekolah', 'sekolah_id');
    }
}
