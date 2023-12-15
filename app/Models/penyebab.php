<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyebab extends Model
{
    use HasFactory;

    protected $table = 'penyebabs';
    protected $primaryKey= 'id';
    public $timestamps = true;
}
