<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    use HasFactory;

    protected $table = 'kuisioner';

    protected $primaryKey = 'id_kuisioner';

    // protected $fillable = ['nama', 'kuisioner'];
}
