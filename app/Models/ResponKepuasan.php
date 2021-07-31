<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponKepuasan extends Model
{
    use HasFactory;

    protected $table = 'respon_kepuasan';
    protected $primaryKey = 'id_respon_kepuasan';
}