<?php

namespace App\Http\Livewire\Lib;

use App\Models\Admin\Lib\Lib64Model;
use Livewire\Component;
use Livewire\WithPagination;

class Lib64bitUpdate extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $lib64DB = Lib64Model::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.lib.lib64bit-update', ['lib64DB' => $lib64DB]);
    }
}
