<?php

namespace App\Http\Livewire\Admin\Safety;

use App\Models\Admin\SafetyStatusModel;
use Livewire\Component;

class SafetyStatus extends Component
{
    public function render()
    {
        $safetyModel = SafetyStatusModel::orderBy('id', 'DESC')->paginate(100);
        return view('livewire.admin.safety.safety-status', ['safetyModel' => $safetyModel]);
    }
}
