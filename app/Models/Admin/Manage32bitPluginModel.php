<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage32bitPluginModel extends Model
{
    use HasFactory;
    protected $table = 'pluginData';
    protected $fillable = [
        'pluginName',
        'pluginVersion',
        'pluginUrl'
    ];
}
