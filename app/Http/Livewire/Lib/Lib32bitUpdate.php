<?php

namespace App\Http\Livewire\Lib;

use App\Models\Admin\Lib\Lib32Model;
use Livewire\Component;
use Livewire\WithPagination;

class Lib32bitUpdate extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $lib32DB = Lib32Model::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.lib.lib32bit-update', ['lib32DB' => $lib32DB]);
    }
}
