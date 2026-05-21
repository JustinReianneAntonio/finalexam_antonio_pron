<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'date_of_birth',
    ];
}
