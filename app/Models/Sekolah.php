<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = "tb_sekolah";
    protected $primaryKey = "sekolah_id";
    protected $guarded = [];

    public function kursus(): HasMany
    {
        return $this->hasMany(Guru::class, 'kursus_id_sekolah', 'sekolah_id');
    }
}
