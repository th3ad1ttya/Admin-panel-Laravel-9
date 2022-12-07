<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\ManageLoaderModel;
use Livewire\Component;
use Livewire\WithPagination;

class ManageLoader extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $manageLoader = ManageLoaderModel::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.admin.manage-loader', ['manageLoader' => $manageLoader]);
    }
}
