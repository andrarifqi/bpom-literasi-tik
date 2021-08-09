<?php

namespace App\Models;

use App\Models\ResponKepuasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KuisionerKepuasan extends Model
{
    use HasFactory;

    protected $table = 'kuisioner_kepuasan';
    protected $primaryKey = 'id_kuisioner_kepuasan';

    public function respon_kepuasan()
    {
        return $this->hasMany(ResponKepuasan::class);
    }
}