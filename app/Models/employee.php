<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $hasFactory = true;
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'address',
        'dob',
        'contact',
    ];
}
