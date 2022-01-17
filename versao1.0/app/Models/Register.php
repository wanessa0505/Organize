<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'Register';
    protected $fillable = [

        'name',
        'email',
        'senha',
        'confirmar'

    ];
}
