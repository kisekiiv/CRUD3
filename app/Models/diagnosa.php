<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosas';
    protected $primaryKey= 'id';
    public $timestamps = true;
}
