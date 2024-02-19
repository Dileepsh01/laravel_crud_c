<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudc extends Model
{
    use HasFactory;
    protected $fillable=[ 'fullname', 'email', 'password', 'phone' ];
    // protected $guarded=[];
}
