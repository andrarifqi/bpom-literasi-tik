<?php

namespace App\Models;

use App\Models\Kuisioner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responden extends Model
{
    use HasFactory;

    protected $table = 'responden';
    protected $primaryKey = 'id_responden';

    public function kuisioner()
    {
        return $this->belongsTo(Kuisioner::class);
    }
}