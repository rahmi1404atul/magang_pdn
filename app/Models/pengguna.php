<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    Protected $table = 'pengguna';
    Protected $fillable= ['nama','email','telpon','foto'];
    

}
