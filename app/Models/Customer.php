<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    public $table = 'members';
    public $timestamps = false;      //to prevent the exception of unknown column update at 
}
