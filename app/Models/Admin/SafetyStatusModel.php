<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyStatusModel extends Model
{
    use HasFactory;

    protected $table = 'safety';

    protected $fillable = [
        'is32Bit',
        'is64Bit'
    ];
}
