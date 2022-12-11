<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey ='id';

    protected $fillable = ['name','no_hp','email','password'];
}
