<?php

namespace App\Models;

use App\Models\KuisionerKepuasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResponKepuasan extends Model
{
    use HasFactory;

    protected $table = 'respon_kepuasan';
    protected $primaryKey = 'id_respon_kepuasan';

    public function kuisioner_kepuasan()
    {
        return $this->belongsTo(KuisionerKepuasan::class);
    }
}