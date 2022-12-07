<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage64bitPluginModel extends Model
{
    use HasFactory;
    protected $table = 'plugin64Data';

    protected $fillable = [
        'plugin64Name',
        'plugin64Version',
        'plugin64Url'
    ];
}
