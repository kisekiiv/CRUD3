<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisiKlinis extends Model
{
    use HasFactory;

    protected $table = 'kondisi_klinis';
    protected $primaryKey= 'id';
    public $timestamps = true;
}
