<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    protected $table = 'lector';
    protected $fillable = ['name', 'last_name', 'email', 'adress', 'phone_number' ];
    
}
