<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\Manage32bitPluginModel;
use Livewire\Component;
use Livewire\WithPagination;

class PushPlugin32Update extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $plugin32model = Manage32bitPluginModel::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.admin.push-plugin32-update', ['plugin32model' => $plugin32model]);
    }
}
