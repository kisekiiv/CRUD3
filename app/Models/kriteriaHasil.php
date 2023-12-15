<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteriaHasil extends Model
{
    use HasFactory;

    protected $table = 'kriteria_hasils';
    protected $primaryKey= 'id';
    public $timestamps = true;
}
