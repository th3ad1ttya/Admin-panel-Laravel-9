<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageLoaderModel extends Model
{
    use HasFactory;
    protected $table = 'loaderconfig';
    protected $fillable = [
        'name',
        'loaderVersion',
        'loaderPackage',
        'loaderUrl',
        'loaderChangeLog'
    ];
}
