<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekspektasi extends Model
{
    use HasFactory;

    protected $table = 'ekspektasis';
    protected $primaryKey= 'id';
    public $timestamps = true;
}
