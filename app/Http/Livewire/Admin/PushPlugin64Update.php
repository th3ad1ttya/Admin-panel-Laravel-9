<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\Manage64bitPluginModel;
use Livewire\Component;
use Livewire\WithPagination;

class PushPlugin64Update extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $plugin64model = Manage64bitPluginModel::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.admin.push-plugin64-update', ['plugin64model' => $plugin64model]);
    }
}
