<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $Fillable = ['namamapel','guru','kelas','jadwal','gambarbuku'];
}