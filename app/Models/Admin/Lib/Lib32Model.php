<?php

namespace App\Models\Admin\Lib;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lib32Model extends Model
{
    use HasFactory;
    protected $table = 'lib32';

    protected $fillable = [
        'libARMV7aName',
        'libARMV8aName',
        'libARMV7aUrl',
        'libARMV8aUrl',
        'libARMV7aVersion',
        'libARMV8aVersion'
    ];
}
