<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    //mass assignment
    protected $fillable = [
        'users_id',
        'first_name',
        'last_name',
        'address',
    ];
}
