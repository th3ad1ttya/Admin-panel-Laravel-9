<?php

namespace App\Models\Admin\Lib;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lib64Model extends Model
{
    use HasFactory;
    protected $table = 'lib64';

    protected $fillable = [
        'lib64ARMV7aName',
        'lib64ARMV8aName',
        'lib64ARMV7aUrl',
        'lib64ARMV8aUrl',
        'lib64ARMV7aVersion',
        'lib64ARMV8aVersion'
    ];
}
