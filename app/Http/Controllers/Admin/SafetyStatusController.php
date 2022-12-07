<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Status\SafetyStatusRequests;
use App\Models\Admin\SafetyStatusModel;
use Illuminate\Http\Request;

class SafetyStatusController extends Controller
{
    public function safetyIndex()
    {
        return view('admin.safety.safety-status');
    }

    //Fetch Data
    public function fetchSafetyStatus()
    {
        $fetchServers = SafetyStatusModel::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Routes
    public function editStatus(SafetyStatusModel $statusModel)
    {
        return view('admin.safety.edit-status', compact('statusModel'));
    }


    //Update-status
    public function updateStatus(SafetyStatusRequests $requests, $statusModel)
    {
        $validStatusFormData = $requests->validated();
        $statusModel = SafetyStatusModel::findOrFail($statusModel);

        $statusModel->is32Bit = $validStatusFormData['is32Bit'];
        $statusModel->is64Bit = $validStatusFormData['is64Bit'];

        $statusModel->update();
        return redirect('admin/safety-status')->with('message', 'Safety status was up-to-date');
    }
}
