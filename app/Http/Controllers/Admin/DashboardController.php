<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Manage32bitPluginModel;
use App\Models\Admin\Manage64bitPluginModel;
use App\Models\Admin\ManageLoaderModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardIndex() {
        $manageLoader = ManageLoaderModel::orderBy('id')->get();
        $manage32Plugin = Manage32bitPluginModel::orderBy('id')->get();
        $manage64Plugin = Manage64bitPluginModel::orderBy('id')->get();
        return view('admin.dashboard', compact('manageLoader', 'manage32Plugin', 'manage64Plugin'));
    }
}
