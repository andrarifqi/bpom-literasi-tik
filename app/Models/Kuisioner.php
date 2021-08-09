<?php

namespace App\Models;

use App\Models\Responden;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kuisioner extends Model
{
    use HasFactory;

    protected $table = 'kuisioner';

    protected $primaryKey = 'id_kuisioner';

    // protected $fillable = ['nama', 'kuisioner'];
     public function responden()
    {
        return $this->hasMany(Responden::class);
    }
}