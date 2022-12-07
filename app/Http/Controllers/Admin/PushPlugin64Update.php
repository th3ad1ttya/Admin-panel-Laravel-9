<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PushPlugin64UpdateRequest;
use App\Models\Admin\Manage64bitPluginModel;
use Illuminate\Http\Request;

class PushPlugin64Update extends Controller
{
    public function pushPlugin64Index()
    {
        return view('admin.push-plugin64-updates.64bitindex');
    }

    //Fetch Data
    public function fetchPlugin64Data()
    {
        $fetchServers = Manage64bitPluginModel::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Routes
    public function push64BitPluginUpdate(Manage64bitPluginModel $modelPlugin64)
    {
        return view('admin.push-plugin64-updates.64bit-push-update', compact('modelPlugin64'));
    }

    //Push new update
    public function push64bitPlugin(PushPlugin64UpdateRequest $_64requests, $modelPlugin64)
    {
        $validPlugin64FormData = $_64requests->validated();
        $modelPlugin64 = Manage64bitPluginModel::findOrFail($modelPlugin64);

        $modelPlugin64->plugin64Name = $validPlugin64FormData['plugin64Name'];
        $modelPlugin64->plugin64Version = $validPlugin64FormData['plugin64Version'];

        //Plugin64 apk
        function generateRandomLoaderName($length = 8)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i=0; $i < $length ; $i++) {
                # code...
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        if($_64requests->hasFile('plugin64Url')) {
            $file = $_64requests->file('plugin64Url');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'plugin64-v-'.$validPlugin64FormData['plugin64Version'].'-'.generateRandomLoaderName().'.'.$extension;

            $file->move('uploads/plugins/plugin64/archiver/', $fileName);
            $modelPlugin64->plugin64Url = $fileName;
        }

        $modelPlugin64->update();
        return redirect('/admin/push-plugin64-update')->with('message', 'New plugin was updated!');
    }
}
