<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisionerKepuasan extends Model
{
    use HasFactory;

    protected $table = 'kuisioner_kepuasan';
    protected $primaryKey = 'id_kuisioner_kepuasan';
}